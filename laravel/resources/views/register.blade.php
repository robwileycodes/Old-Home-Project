@extends('template')

@section('content')
    <h1>Register</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="#">
        @csrf

        <div>
            <label for="phone">Phone</label>
            <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div>
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
        </div>

        <div>
            <label for="email">Email ID</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
        </div>

        <div>
            <label for="family_code">Family code (For Patient Family Member)</label>
            <input id="family_code" type="text" name="family_code" value="{{ old('family_code') }}">
        </div>

        <div>
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="">-- Select Role --</option>
                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="supervisor" {{ old('role') === 'supervisor' ? 'selected' : '' }}>Supervisor</option>
                <option value="doctor" {{ old('role') === 'doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="caregiver" {{ old('role') === 'caregiver' ? 'selected' : '' }}>Caregiver</option>
                <option value="patient" {{ old('role') === 'patient' ? 'selected' : '' }}>Patient</option>
                <option value="family" {{ old('role') === 'family' ? 'selected' : '' }}>Family Member</option>
            </select>
        </div>

        <div>
            <label for="relation_to_emergency_contact">Relation to Emergency Contact</label>
            <input
                id="relation_to_emergency_contact"
                type="text"
                name="relation_to_emergency_contact"
                value="{{ old('relation_to_emergency_contact') }}"
                class="patient-only-field"
                disabled
            >
        </div>

        <div>
            <label for="emergency_contact">Emergency Contact</label>
            <input
                id="emergency_contact"
                type="text"
                name="emergency_contact"
                value="{{ old('emergency_contact') }}"
                class="patient-only-field"
                disabled
            >
        </div>

        <div>
            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                class="patient-only-field"
                disabled
            >
        </div>

        <div>
            <button type="submit">Ok</button>
            <a href="{{ route('home') }}">Cancel</a>
        </div>
    </form>

    <script>
        const roleSelect = document.getElementById('role');
        const patientOnlyFields = document.querySelectorAll('.patient-only-field');

        function togglePatientFields() {
            const isPatient = roleSelect.value === 'patient';

            for (let i = 0; i < patientOnlyFields.length; i++) {
                const field = patientOnlyFields[i];
                field.disabled = !isPatient;
                if (!isPatient) {
                    field.value = '';
                }
            }
        }

        roleSelect.addEventListener('change', togglePatientFields);
        togglePatientFields();
    </script>
@endsection