<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Template</title>
</head>
<body>
    <header>
        <img src="{{ asset('header-logo.png') }}" alt="header-logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Roster</a></li>
                <li>
                    <p>Admin Links</p>
                    <ul>
                        <li><a href="#" class="role-admin">Registration Approval</a></li>
                        <li><a href="#" class="role-admin">Additional Patient Info</a></li>
                        <li><a href="#" class="role-admin">Doctor's Appointment</a></li>
                        <li><a href="#" class="role-admin">New Roster</a></li>
                        <li><a href="#" class="role-admin">Patients</a></li>
                        <li><a href="#" class="role-admin">Employees</a></li>
                        <li><a href="#" class="role-admin">Admin Report</a></li>
                        <li><a href="#" class="role-admin">Roles</a></li>
                        <li><a href="#" class="role-admin">Payment</a></li>
                    </ul>
                </li>
                <li>
                    <p>Supervisor Links</p>
                    <ul>
                        <li><a href="#" class="role-supervisor">Registration Approval</a></li>
                        <li><a href="#" class="role-supervisor">Additional Patient Info</a></li>
                        <li><a href="#" class="role-supervisor">Doctor's Appointment</a></li>
                        <li><a href="#" class="role-supervisor">New Roster</a></li>
                        <li><a href="#" class="role-supervisor">Patients</a></li>
                        <li><a href="#" class="role-supervisor">Employees</a></li>
                        <li><a href="#" class="role-supervisor">Admin Report</a></li>
                    </ul>
                </li>
                <li>
                    <p>Doctor Links</p>
                    <ul>
                        <li><a href="#" class="role-doctor">Doctor's Home</a></li>
                        <li><a href="#" class="role-doctor">Patients</a></li>
                    </ul>
                </li>
                <li>
                    <p>Caregiver Links</p>
                    <ul>
                        <li><a href="#" class="role-Caregiver">Caregiver's Home</a></li>
                        <li><a href="#" class="role-Caregiver">Patients</a></li>
                    </ul>
                </li>
                <div class="patient-link">
                    <li><a href="#" class="role-patient">Patient's Home</a></li>
                </div>
                <div class="family-link">
                    <li><a href="#" class="role-family">Family Member's Home</a></li>
                </div>
            </ul>
            <div class="logged-out-links">
                <ul>
                    <li><a href="#" class="guest-only">Log in</a></li>
                    <li><a href="#" class="guest-only">Register</a></li>
                </ul>
            </div>
            <div class="logged-in-link">
                <a href="#" class="auth-only">Log out</a>
            </div>
        </nav>
    </header>
    <main>

    </main>
    <aside></aside>
    <footer>
        <p>Copyright 2026. All Rights Reserved.</p>
    </footer>
</body>
</html>