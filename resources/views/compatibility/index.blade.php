<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Compatibility | Rasi Palan AI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --purple: #7552d9;
            --purple-dark: #5032a3;
            --text: #29243d;
            --muted: #89859a;
            --border: #ebe7f4;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #faf9fd;
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
        }

        .navbar {
            background: rgba(255, 255, 255, .95);
            border-bottom: 1px solid #f0edf7;
            padding: 17px 0;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            text-decoration: none;
            letter-spacing: -.5px;
        }

        .brand-icon {
            display: inline-flex;
            width: 37px;
            height: 37px;
            align-items: center;
            justify-content: center;
            background: #eee8ff;
            border-radius: 12px;
            margin-right: 8px;
        }

        .nav-link {
            color: #6f6980;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-link:hover {
            color: var(--purple);
        }

        .page-hero {
            text-align: center;
            padding: 55px 20px 35px;
        }

        .hero-badge {
            display: inline-block;
            background: #f0eaff;
            color: var(--purple-dark);
            border-radius: 30px;
            padding: 8px 14px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .page-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(32px, 5vw, 47px);
            font-weight: 700;
            letter-spacing: -1px;
            margin: 20px 0 12px;
        }

        .page-hero p {
            color: var(--muted);
            font-size: 15px;
            line-height: 1.8;
            max-width: 510px;
            margin: auto;
        }

        .main-wrap {
            max-width: 760px;
            padding: 0 18px;
            margin: 0 auto 65px;
        }

        .main-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 22px;
            box-shadow: 0 14px 45px rgba(52, 37, 93, .07);
            overflow: hidden;
        }

        .card-top {
            padding: 26px 32px;
            border-bottom: 1px solid #f0edf7;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .card-top-icon {
            width: 48px;
            height: 48px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4efff;
            font-size: 24px;
            flex-shrink: 0;
        }

        .card-top h2 {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 5px;
        }

        .card-top p {
            font-size: 13px;
            color: var(--muted);
            margin: 0;
        }

        .card-body-custom {
            padding: 30px 32px 34px;
        }

        .field-heading {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.1px;
            font-weight: 700;
            color: #8d879f;
            margin-bottom: 15px;
        }

        .type-card {
            display: block;
            height: 100%;
            position: relative;
            cursor: pointer;
        }

        .type-card input {
            position: absolute;
            opacity: 0;
        }

        .type-content {
            display: flex;
            align-items: center;
            gap: 13px;
            height: 100%;
            min-height: 84px;
            padding: 16px;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            transition: .2s ease;
        }

        .type-card input:checked+.type-content {
            border-color: var(--purple);
            background: #f8f5ff;
            box-shadow: 0 0 0 3px rgba(117, 82, 217, .08);
        }

        .type-card input:focus-visible+.type-content {
            outline: 3px solid rgba(117, 82, 217, .25);
        }

        .type-icon {
            width: 43px;
            height: 43px;
            border-radius: 12px;
            background: #f1ecff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .type-name {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .type-desc {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.5;
        }

        .form-label {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .form-select {
            height: 51px;
            border-radius: 11px;
            border: 1px solid #e6e1ef;
            padding: 0 14px;
            color: #363047;
            font-size: 14px;
            background-color: #fff;
        }

        .form-select:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 3px rgba(117, 82, 217, .1);
        }

        .person-card {
            padding: 19px;
            border: 1px solid #ece7f5;
            background: #fcfbff;
            border-radius: 15px;
            height: 100%;
        }

        .person-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 19px;
        }

        .person-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: #eae3ff;
            color: var(--purple-dark);
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
        }

        .person-heading strong {
            font-size: 14px;
        }

        .person-heading small {
            display: block;
            color: var(--muted);
            font-size: 11px;
            margin-top: 2px;
        }

        .connect-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            color: #c0b4df;
            font-size: 12px;
            margin: 18px 0;
        }

        .connect-line {
            height: 1px;
            width: 36px;
            background: #e6dff4;
        }

        .submit-btn {
            width: 100%;
            border: none;
            min-height: 53px;
            border-radius: 12px;
            background: var(--purple);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            transition: .2s ease;
        }

        .submit-btn:hover {
            background: var(--purple-dark);
            box-shadow: 0 7px 18px rgba(117, 82, 217, .2);
            transform: translateY(-1px);
        }

        .bottom-note {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.7;
            margin: 16px 0 0;
        }

        .footer {
            padding: 24px 15px;
            text-align: center;
            border-top: 1px solid #eeeaf5;
            color: #9993a8;
            font-size: 12px;
        }

        @media (max-width: 575px) {
            .page-hero {
                padding: 40px 20px 28px;
            }

            .card-top {
                padding: 22px 20px;
            }

            .card-body-custom {
                padding: 24px 20px;
            }

            .person-card {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="{{ url('/') }}" class="brand">
                    <span class="brand-icon">🔮</span>Rasi Palan AI
                </a>

                <div class="d-flex gap-3 align-items-center">
                    <a href="{{ url('/') }}" class="nav-link text-decoration-none">Home</a>
                    <a href="{{ route('horoscope.index') }}"
                        class="nav-link text-decoration-none d-none d-sm-inline">Daily Horoscope</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="page-hero">
        <div class="container">
            <span class="hero-badge">✦ Love • Connection • Harmony</span>

            <h1>Discover Your Cosmic Connection</h1>

            <p>
                இரண்டு ராசிகளின் பொருத்தத்தை அறியுங்கள்.
                Explore astrology-inspired insights for love and marriage.
            </p>
        </div>
    </header>

    <main class="main-wrap">
        <div class="main-card">

            <div class="card-top">
                <div class="card-top-icon">💜</div>
                <div>
                    <h2>Compatibility Reading</h2>
                    <p>Choose your relationship type and both Rasis below.</p>
                </div>
            </div>

            <div class="card-body-custom">

                @if ($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <strong>Please check your details.</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('compatibility.generate') }}">
                    @csrf

                    <div class="field-heading">01 &nbsp; Relationship type</div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="type-card">
                                <input type="radio" name="compatibility_type" value="love"
                                    @checked(old('compatibility_type', 'love') === 'love') required>

                                <span class="type-content">
                                    <span class="type-icon">💗</span>
                                    <span>
                                        <span class="type-name d-block">Love Compatibility</span>
                                        <span class="type-desc d-block">Connection and understanding</span>
                                    </span>
                                </span>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="type-card">
                                <input type="radio" name="compatibility_type" value="marriage"
                                    @checked(old('compatibility_type') === 'marriage') required>

                                <span class="type-content">
                                    <span class="type-icon">💍</span>
                                    <span>
                                        <span class="type-name d-block">Marriage Compatibility</span>
                                        <span class="type-desc d-block">Partnership and harmony</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="field-heading">02 &nbsp; Select both Rasis</div>

                    <div class="row g-3 align-items-stretch">
                        <div class="col-md-6">
                            <div class="person-card">
                                <div class="person-heading">
                                    <span class="person-number">1</span>
                                    <span>
                                        <strong>First Person</strong>
                                        <small>முதல் நபர்</small>
                                    </span>
                                </div>

                                <label for="person_one_rasi" class="form-label">
                                    Your Rasi
                                </label>

                                <select id="person_one_rasi" name="person_one_rasi" class="form-select" required>
                                    <option value="">Select a Rasi</option>
                                    @foreach ($rasis as $rasi)
                                        <option value="{{ $rasi }}" @selected(old('person_one_rasi') === $rasi)>
                                            {{ $rasi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="person-card">
                                <div class="person-heading">
                                    <span class="person-number">2</span>
                                    <span>
                                        <strong>Second Person</strong>
                                        <small>இரண்டாம் நபர்</small>
                                    </span>
                                </div>

                                <label for="person_two_rasi" class="form-label">
                                    Partner's Rasi
                                </label>

                                <select id="person_two_rasi" name="person_two_rasi" class="form-select" required>
                                    <option value="">Select a Rasi</option>
                                    @foreach ($rasis as $rasi)
                                        <option value="{{ $rasi }}" @selected(old('person_two_rasi') === $rasi)>
                                            {{ $rasi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="connect-row">
                        <span class="connect-line"></span>
                        <span>✦ Your connection starts here ✦</span>
                        <span class="connect-line"></span>
                    </div>

                    <div class="mb-4">
                        <label for="language" class="form-label">
                            Reading language / முடிவு மொழி
                        </label>

                        <select id="language" name="language" class="form-select" required>
                            <option value="ta" @selected(old('language', 'ta') === 'ta')>
                                தமிழ் — Tamil
                            </option>
                            <option value="en" @selected(old('language') === 'en')>
                                English
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="submit-btn">
                        Reveal Compatibility &nbsp; →
                    </button>

                    <p class="bottom-note">
                        For entertainment and personal reflection.<br>
                        Healthy relationships grow through trust, respect and communication.
                    </p>
                </form>

            </div>
        </div>
    </main>

    <footer class="footer">
        © {{ date('Y') }} Rasi Palan AI
    </footer>

</body>

</html>