<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'phone' => ['required', 'string', 'max:25'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'date_of_birth' => ['required', 'date'],
            'family_code' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'in:admin,supervisor,doctor,caregiver,patient,family'],
            'relation_to_emergency_contact' => ['required_if:role,patient', 'nullable', 'string', 'max:255'],
            'emergency_contact' => ['required_if:role,patient', 'nullable', 'string', 'max:255'],
            'password' => ['required_if:role,patient', 'nullable', 'string', 'min:8'],
        ]);

        $isPatient = $validated['role'] === 'patient';

        $fullName = $validated['first_name'] . ' ' . $validated['last_name'];
        $relation = null;
        $emergencyContact = null;
        $password = null;

        if ($isPatient) {
            $relation = $validated['relation_to_emergency_contact'] ?? null;
            $emergencyContact = $validated['emergency_contact'] ?? null;
            if (!empty($validated['password'])) {
                $password = Hash::make($validated['password']);
            }
        }

        User::create([
            'name' => $fullName,
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'date_of_birth' => $validated['date_of_birth'],
            'role' => $validated['role'],
            'family_code' => $validated['family_code'] ?? null,
            'relation_to_emergency_contact' => $relation,
            'emergency_contact' => $emergencyContact,
            'approval_status' => 'pending',
            'password' => $password,
        ]);

        return redirect()->route('login')->with('status', 'Registration submitted!');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = $request->user();

            return match ($user->role ?? null) {
                'admin', 'supervisor' => redirect()->intended('/roster'),
                'doctor' => redirect()->intended('/doctor/home'),
                'caregiver' => redirect()->intended('/caregiver/home'),
                'patient' => redirect()->intended('/patient/home'),
                'family' => redirect()->intended('/family/home'),
                default => redirect()->intended('/'),
            };
        }

        return back()
            ->withErrors(['email' => 'Invalid email or password.'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
