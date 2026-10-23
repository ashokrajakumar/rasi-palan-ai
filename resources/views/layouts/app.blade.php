<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Rasi Palan AI')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f3ff;
            color: #24213a;
            font-family: Arial, sans-serif;
        }

        .navbar-brand {
            font-weight: 700;
            color: #ffffff;
        }

        .hero {
            background: linear-gradient(135deg, #24104f, #6d28d9);
            color: white;
            border-radius: 24px;
            padding: 40px 24px;
        }

        .main-card {
            background: white;
            border: 0;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(50, 30, 80, 0.08);
        }

        .btn-astrology {
            background: #6d28d9;
            border: 0;
            color: white;
        }

        .btn-astrology:hover {
            background: #4c1d95;
            color: white;
        }

        .form-control,
        .form-select {
            padding: 12px;
        }

        .horoscope-text {
            white-space: pre-wrap;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark" style="background: #24104f;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('horoscope.index') }}">
                ✨ Rasi Palan AI
            </a>
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="text-center text-secondary pb-4">
        <small>
            Traditional astrology for entertainment and personal reflection.
            Predictions are not guaranteed.
        </small>
    </footer>

</body>

</html>