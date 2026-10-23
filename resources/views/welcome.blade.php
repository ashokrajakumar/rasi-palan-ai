<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rasi Palan AI | Horoscope, Compatibility & AI Chat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f8f4ff, #eef5ff);
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: #29213d;
        }

        .navbar {
            background: #4c1d95;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .navbar-brand:hover {
            color: #f3e8ff;
        }

        .navbar .nav-link {
            transition: color 0.2s ease;
        }

        .navbar .nav-link:hover {
            color: #ddd6fe !important;
        }

        .hero {
            padding: 65px 15px 40px;
            text-align: center;
        }

        .hero h1 {
            color: #4c1d95;
            font-weight: 700;
        }

        .feature-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 35px 25px;
            height: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 32px rgba(76, 29, 149, 0.12);
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 18px;
        }

        .feature-card h3 {
            color: #4c1d95;
            font-weight: 700;
        }

        .btn-purple {
            display: inline-block;
            background: #6d28d9;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 9px;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .btn-purple:hover {
            background: #4c1d95;
            color: white;
        }

        .feature-description {
            color: #6b7280;
            margin-top: 16px;
            line-height: 1.7;
        }

        .disclaimer {
            max-width: 750px;
            margin: 0 auto;
        }

        footer {
            margin-top: 45px;
            padding: 25px 15px;
            text-align: center;
            color: #666;
        }

        @media (max-width: 576px) {
            .hero {
                padding: 45px 15px 30px;
            }

            .feature-card {
                padding: 30px 20px;
            }
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

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('horoscope.index') }}">
                            🌞 Daily Horoscope
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('compatibility.index') }}">
                            ❤️ Compatibility
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('astrologer-chat.index') }}">
                            🔮 AI Astrologer
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">

            <h1>உங்கள் ராசி பலன் ✨</h1>

            <h2 class="h4 mt-3">Welcome to Rasi Palan AI</h2>

            <p class="lead text-muted mt-3">
                Discover your daily horoscope, explore compatibility
                and chat with your AI astrologer.
            </p>

            <p class="text-muted">
                Astrology-inspired guidance in Tamil and English.
            </p>

        </div>
    </section>

    <!-- Features -->
    <section class="container pb-5">
        <div class="row g-4 justify-content-center">

            <!-- Daily Horoscope -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center">

                    <div class="feature-icon">🌞</div>

                    <h3>Daily Horoscope</h3>

                    <p class="feature-description">
                        Enter your name, date of birth and Rasi
                        to explore your daily horoscope in Tamil
                        or English.
                    </p>

                    <a href="{{ route('horoscope.index') }}" class="btn btn-purple mt-3">
                        View Daily Horoscope
                    </a>

                </div>
            </div>

            <!-- Love & Marriage Compatibility -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center">

                    <div class="feature-icon">❤️</div>

                    <h3>Love & Marriage Compatibility</h3>

                    <p class="feature-description">
                        Select two Rasis to explore love and
                        marriage compatibility in Tamil or English.
                    </p>

                    <a href="{{ route('compatibility.index') }}" class="btn btn-purple mt-3">
                        Check Compatibility
                    </a>

                </div>
            </div>

            <!-- AI Astrologer Chat -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center">

                    <div class="feature-icon">🔮</div>

                    <h3>AI Astrologer Chat</h3>

                    <p class="feature-description">
                        Ask questions about your career, love,
                        marriage and life. Get AI-generated
                        guidance in Tamil or English.
                    </p>

                    <a href="{{ route('astrologer-chat.index') }}" class="btn btn-purple mt-3">
                        Chat with AI
                    </a>

                </div>
            </div>

        </div>
    </section>

    <!-- Disclaimer -->
    <section class="container text-center disclaimer">
        <p class="small text-muted">
            Astrology-inspired predictions are for entertainment
            and personal reflection. AI responses are not guaranteed
            and should not replace professional advice.
        </p>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0">
                © {{ date('Y') }} Rasi Palan AI. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>