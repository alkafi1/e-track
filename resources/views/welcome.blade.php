<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management System</title>
    <link rel="shortcut icon" href="{{ asset('public/assets/img/etracker-logo-1.png') }}" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Figtree', sans-serif;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTkzM3wwfDF8c2VhcmNofDJ8fHRhc2slMjBtYW5hZ2VtZW50fGVufDB8fHx8MTYwMTIzNTM0OQ&ixlib=rb-1.2.1&q=80&w=1080');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        /* Custom Button Styles */
        .btn-custom {
            background-color: #FF2D20;
            color: white;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            margin-right: 10px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn-custom-outline {
            border: 2px solid #FF2D20;
            color: #FF2D20;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            background-color: transparent;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        /* Hover Effect for Register Button */
        .btn-custom-outline:hover {
            background-color: #FF2D20;
            color: white;
            border-color: #FF2D20;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Manage Your Tasks Effectively</h1>
            <p>Join our Task Management System to stay organized, boost productivity, and manage your work with ease.
            </p>
            @auth
                <a href="{{ route(Auth::user()->role == 'admin' ? 'admin.dashboard' : 'dashboard') }}"
                    class="btn btn-custom-outline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-custom">Log In</a>
                <a href="{{ route('register') }}" class="btn btn-custom-outline">Register</a>
            @endauth

        </div>
    </section>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
