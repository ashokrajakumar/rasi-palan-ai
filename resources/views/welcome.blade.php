
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rasi Palan AI - Daily Horoscope</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: linear-gradient(135deg, #f8f4ff, #eef5ff);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #4c1d95;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .hero {
            padding: 60px 15px 30px;
            text-align: center;
        }

        .hero h1 {
            color: #4c1d95;
            font-weight: 700;
        }

        .feature-card {
            background: white;
            border: none;
            border-radius: 18px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
            transition: transform 0.2s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .btn-purple {
            background: #6d28d9;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
        }

        .btn-purple:hover {
            background: #4c1d95;
            color: white;
        }

        footer {
            margin-top: 60px;
            padding: 20px;
            text-align: center;
            color: #666;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                🔮 Rasi Palan AI
            </a>

            <button
                class="navbar-toggler bg-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white"
                           href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white"
                           href="{{ route('compatibility.index') }}">
                            ❤️ Compatibility
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Rasi Palan AI ✨</h1>

            <p class="lead text-muted mt-3">
                Explore your daily horoscope and relationship compatibility.
            </p>
        </div>
    </section>

    <!-- Features -->
    <section class="container pb-5">
        <div class="row g-4">

            <!-- Daily Horoscope -->
            <div class="col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">🌞</div>

                    <h3>Daily Horoscope</h3>

                    <p class="text-muted mt-3">
                        Discover your daily Rasi Palan and get
                        astrology-inspired guidance in Tamil or English.
                    </p>

                    <a href="{{ url('/') }}"
                       class="btn btn-purple mt-2">
                        View Daily Horoscope
                    </a>
                </div>
            </div>

            <!-- Compatibility -->
            <div class="col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">❤️</div>

                    <h3>Love & Marriage Compatibility</h3>

                    <p class="text-muted mt-3">
                        Compare two Rasis and explore love and
                        marriage compatibility in Tamil or English.
                    </p>

                    <a href="{{ route('compatibility.index') }}"
                       class="btn btn-purple mt-2">
                        Check Compatibility
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">
                © {{ date('Y') }} Rasi Palan AI.
                For entertainment and general guidance.
            </p>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
