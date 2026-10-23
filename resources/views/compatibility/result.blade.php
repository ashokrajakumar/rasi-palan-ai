<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Compatibility Reading | Rasi Palan AI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --purple: #8b5cf6;
            --gold: #f5c96a;
            --ink: #241a3b;
            --muted: #77738c;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background: #f7f5fc;
        }

        .topbar {
            background: #191131;
            padding: 17px 0;
        }

        .brand {
            color: white;
            font-weight: 700;
            text-decoration: none;
            font-size: 1.15rem;
        }

        .brand span {
            color: var(--gold);
        }

        .nav-link-custom {
            color: #e7e0f7;
            text-decoration: none;
            padding: 8px 10px;
            font-size: .9rem;
        }

        .nav-link-custom:hover {
            color: var(--gold);
        }

        .result-hero {
            text-align: center;
            padding: 48px 15px 90px;
            color: white;
            background:
                radial-gradient(ellipse at 20% 10%, rgba(139, 92, 246, .35), transparent 42%),
                radial-gradient(ellipse at 90% 80%, rgba(245, 201, 106, .14), transparent 35%),
                linear-gradient(135deg, #17102d, #302052 60%, #21183b);
        }

        .hero-icon {
            width: 76px;
            height: 76px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid rgba(245, 201, 106, .5);
            background: rgba(255, 255, 255, .07);
            border-radius: 50%;
            font-size: 36px;
            margin: 0 auto 18px;
        }

        .result-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3.1rem);
            font-weight: 700;
        }

        .result-hero p {
            color: #d5cde7;
            margin-bottom: 0;
        }

        .result-wrap {
            max-width: 850px;
            margin: -55px auto 0;
            padding: 0 18px;
            position: relative;
        }

        .result-card {
            background: white;
            border: 1px solid #eee8fa;
            border-radius: 23px;
            overflow: hidden;
            box-shadow: 0 22px 65px rgba(40, 25, 75, .13);
        }

        .match-summary {
            padding: 28px;
            background: #fcfaff;
            border-bottom: 1px solid #f0edf6;
        }

        .person-box {
            text-align: center;
            height: 100%;
            padding: 19px 12px;
            border: 1px solid #ebe4f7;
            border-radius: 16px;
            background: white;
        }

        .person-box .emoji {
            font-size: 27px;
        }

        .person-box .label {
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: .72rem;
            font-weight: 700;
            margin-top: 10px;
        }

        .person-box .rasi {
            font-size: 1.05rem;
            font-weight: 700;
            margin-top: 6px;
            overflow-wrap: anywhere;
        }

        .heart-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d9468c;
            font-size: 27px;
        }

        .reading-content {
            padding: 30px;
        }

        .reading-label {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 30px;
            background: #f0e9ff;
            color: #6d28d9;
            font-size: .78rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .reading-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .reading-text {
            white-space: pre-wrap;
            overflow-wrap: anywhere;
            color: #514b62;
            line-height: 1.9;
            font-size: .98rem;
        }

        .disclaimer {
            padding: 18px 20px;
            margin-top: 24px;
            border-radius: 13px;
            background: #fff9e9;
            border: 1px solid #f5e5b8;
            color: #77633b;
            font-size: .83rem;
            line-height: 1.7;
        }

        .btn-primary-custom {
            display: inline-block;
            border: 0;
            border-radius: 11px;
            background: #6d28d9;
            color: white;
            padding: 13px 22px;
            text-decoration: none;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-primary-custom:hover {
            background: #5521ad;
            color: white;
            transform: translateY(-1px);
        }

        .btn-secondary-custom {
            display: inline-block;
            border: 1px solid #e3dced;
            border-radius: 11px;
            background: white;
            color: #514465;
            padding: 12px 20px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-secondary-custom:hover {
            background: #f7f3fc;
            color: #35244d;
        }

        .footer {
            text-align: center;
            padding: 35px 15px 25px;
            color: #827b92;
            font-size: .82rem;
        }

        @media (max-width: 576px) {
            .result-hero {
                padding: 40px 15px 80px;
            }

            .match-summary {
                padding: 20px 15px;
            }

            .reading-content {
                padding: 24px 20px;
            }

            .reading-title {
                font-size: 1.45rem;
            }
        }
    </style>
</head>

<body>

    <nav class="topbar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <a href="{{ url('/') }}" class="brand">🔮 Rasi <span>Palan AI</span></a>

            <div class="d-flex flex-wrap">
                <a href="{{ url('/') }}" class="nav-link-custom">Home</a>
                <a href="{{ route('horoscope.index') }}" class="nav-link-custom">Daily Horoscope</a>
                <a href="{{ route('compatibility.index') }}" class="nav-link-custom">Try Again</a>
            </div>
        </div>
    </nav>

    <header class="result-hero">
        <div class="container">
            <div class="hero-icon">💞</div>
            <h1>Your Compatibility Reading</h1>
            <p class="mt-2">A little insight into your astrological connection.</p>
        </div>
    </header>

    <main class="result-wrap">
        <div class="result-card">

            <section class="match-summary">
                <div class="row align-items-center g-3">

                    <div class="col">
                        <div class="person-box">
                            <div class="emoji">🌙</div>
                            <div class="label">Person One</div>
                            <div class="rasi">{{ $record->person_one_rasi }}</div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="heart-divider">♥</div>
                    </div>

                    <div class="col">
                        <div class="person-box">
                            <div class="emoji">✨</div>
                            <div class="label">Person Two</div>
                            <div class="rasi">{{ $record->person_two_rasi }}</div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="reading-content">
                <span class="reading-label">
                    ✦ {{ $record->compatibility_type === 'marriage' ? 'MARRIAGE COMPATIBILITY' : 'LOVE COMPATIBILITY' }}
                </span>

                <h2 class="reading-title">Your Relationship Insights</h2>

                <div class="reading-text">{{ $record->result }}</div>

                <div class="disclaimer">
                    <strong>✦ A gentle reminder</strong><br>
                    This reading is astrology-inspired guidance for entertainment
                    and personal reflection. It does not predict or guarantee
                    relationship outcomes. Healthy relationships depend on
                    communication, trust, respect and mutual understanding.
                </div>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('compatibility.index') }}" class="btn-primary-custom">
                        ❤️ Check Another Match
                    </a>

                    <a href="{{ url('/') }}" class="btn-secondary-custom">
                        Back to Home
                    </a>
                </div>
            </section>

        </div>
    </main>

    <footer class="footer">
        <div>© {{ date('Y') }} Rasi Palan AI</div>
        <div class="mt-1">For entertainment and personal reflection.</div>
    </footer>

</body>

</html>