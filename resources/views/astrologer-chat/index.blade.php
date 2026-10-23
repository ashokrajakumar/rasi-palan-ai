@extends('layouts.app')

@section('title', 'AI Astrologer Chat | Rasi Palan AI')

@section('content')
    <style>
        .astro-page {
            min-height: 85vh;
            padding: 36px 14px 55px;
            background: linear-gradient(135deg, #f8f7ff, #f2f5ff);
        }

        .astro-shell {
            max-width: 900px;
            margin: auto;
        }

        .astro-heading {
            text-align: center;
            margin-bottom: 26px;
        }

        .astro-logo {
            width: 66px;
            height: 66px;
            margin: 0 auto 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 22px;
            background: #eae4ff;
            font-size: 32px;
        }

        .astro-heading h1 {
            font-size: clamp(27px, 5vw, 38px);
            font-weight: 800;
            color: #292044;
            margin-bottom: 9px;
        }

        .astro-heading p {
            color: #77738b;
            margin: 0;
        }

        .astro-card {
            background: white;
            border: 1px solid #ebe7f7;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(58, 42, 110, .08);
        }

        .astro-toolbar {
            padding: 17px 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            border-bottom: 1px solid #f0edf7;
        }

        .astro-status {
            display: flex;
            align-items: center;
            gap: 11px;
            color: #30264e;
            font-weight: 750;
        }

        .astro-status-icon {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: #f0ebff;
            font-size: 22px;
        }

        .astro-status small {
            display: block;
            margin-top: 3px;
            color: #8b879d;
            font-size: 12px;
            font-weight: 400;
        }

        .astro-language {
            width: 130px;
            border: 1px solid #e4dff1;
            border-radius: 10px;
            padding: 9px;
            color: #40365f;
            background: white;
        }

        .astro-messages {
            min-height: 280px;
            max-height: 520px;
            overflow-y: auto;
            padding: 24px;
            background: #fdfcff;
            scroll-behavior: smooth;
        }

        .astro-welcome {
            max-width: 570px;
            margin: 18px auto 25px;
            text-align: center;
        }

        .astro-welcome-icon {
            font-size: 36px;
            margin-bottom: 12px;
        }

        .astro-welcome h2 {
            color: #30264e;
            font-weight: 750;
            font-size: 22px;
        }

        .astro-welcome p {
            color: #77738b;
            line-height: 1.7;
            font-size: 14px;
        }

        .astro-examples {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 9px;
            margin-top: 20px;
        }

        .astro-example {
            border: 1px solid #e4ddfa;
            background: white;
            color: #6250a8;
            border-radius: 20px;
            padding: 9px 13px;
            font-size: 13px;
            cursor: pointer;
            transition: .2s;
        }

        .astro-example:hover {
            background: #f2edff;
            border-color: #c7b8f5;
        }

        .astro-message {
            display: flex;
            margin-bottom: 20px;
            gap: 10px;
            align-items: flex-start;
        }

        .astro-message.user {
            justify-content: flex-end;
        }

        .astro-avatar {
            flex-shrink: 0;
            width: 34px;
            height: 34px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: #eee8ff;
            font-size: 17px;
        }

        .astro-bubble {
            max-width: 80%;
            padding: 13px 16px;
            border-radius: 5px 17px 17px 17px;
            background: #f0edfa;
            color: #403753;
            font-size: 14px;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .astro-message.user .astro-bubble {
            background: linear-gradient(135deg, #7655dc, #5d43ba);
            color: white;
            border-radius: 17px 5px 17px 17px;
        }

        .astro-composer {
            padding: 17px 20px 20px;
            border-top: 1px solid #f0edf7;
            background: white;
        }

        .astro-errors {
            padding: 11px 13px;
            background: #fff1f1;
            border: 1px solid #ffd7d7;
            border-radius: 10px;
            color: #a52b36;
            font-size: 13px;
            margin-bottom: 13px;
        }

        .astro-input-row {
            display: flex;
            gap: 10px;
            align-items: flex-end;
        }

        .astro-input {
            flex: 1;
            min-width: 0;
            resize: vertical;
            min-height: 48px;
            max-height: 140px;
            padding: 13px 15px;
            border: 1px solid #e4dff1;
            border-radius: 14px;
            outline: none;
            font-size: 14px;
            color: #33294d;
            background: #fdfcff;
        }

        .astro-input:focus {
            border-color: #8a70e5;
            box-shadow: 0 0 0 3px rgba(118, 85, 220, .1);
        }

        .astro-send {
            min-height: 48px;
            border: 0;
            border-radius: 13px;
            padding: 0 20px;
            background: linear-gradient(135deg, #7655dc, #5940bb);
            color: white;
            font-weight: 700;
            cursor: pointer;
        }

        .astro-send:hover {
            opacity: .92;
        }

        .astro-send:disabled {
            opacity: .6;
            cursor: wait;
        }

        .astro-footnote {
            color: #9993a9;
            text-align: center;
            font-size: 11px;
            line-height: 1.6;
            margin-top: 12px;
        }

        .astro-actions {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 19px;
        }

        .astro-link {
            display: inline-block;
            text-decoration: none;
            color: #6553a7;
            font-size: 13px;
            font-weight: 650;
            padding: 8px 0;
            background: transparent;
            border: 0;
            cursor: pointer;
        }

        .astro-link:hover {
            color: #40308a;
        }

        .astro-success {
            padding: 11px 13px;
            background: #edfaf1;
            border-radius: 10px;
            color: #267343;
            font-size: 13px;
            margin-bottom: 14px;
        }

        @media(max-width: 560px) {
            .astro-page {
                padding: 25px 9px 40px;
            }

            .astro-toolbar {
                padding: 13px;
                flex-wrap: wrap;
            }

            .astro-messages {
                padding: 16px 11px;
            }

            .astro-composer {
                padding: 13px 11px 16px;
            }

            .astro-bubble {
                max-width: 88%;
                font-size: 13px;
            }

            .astro-send {
                padding: 0 14px;
            }

            .astro-language {
                width: 115px;
            }
        }
    </style>

    <div class="astro-page">
        <div class="astro-shell">

            <div class="astro-heading">
                <div class="astro-logo">🔮</div>
                <h1>AI Astrologer Chat</h1>
                <p>
                    Ask your questions. Get astrology-inspired guidance
                    in Tamil or English.
                </p>
            </div>

            <div class="astro-card">

                <div class="astro-toolbar">
                    <div class="astro-status">
                        <div class="astro-status-icon">✨</div>
                        <div>
                            Your AI Astrologer
                            <small>Here to help you explore your questions</small>
                        </div>
                    </div>

                    <select class="astro-language" id="languageSelect" aria-label="Choose response language">
                        <option value="ta" @selected($language === 'ta')>
                            தமிழ்
                        </option>
                        <option value="en" @selected($language === 'en')>
                            English
                        </option>
                    </select>
                </div>

                <div class="astro-messages" id="astroMessages">

                    @if(count($messages) === 0)
                        <div class="astro-welcome" id="astroWelcome">
                            <div class="astro-welcome-icon">🌙</div>
                            <h2 id="welcomeTitle">
                                வணக்கம்! என்ன கேட்க விரும்புகிறீர்கள்?
                            </h2>
                            <p id="welcomeDescription">
                                உங்கள் வேலை, காதல், திருமணம் அல்லது பொதுவான
                                ராசி பலன் தொடர்பான கேள்விகளைக் கேளுங்கள்.
                            </p>

                            <div class="astro-examples">
                                <button type="button" class="astro-example" data-ta="என் வேலை வாழ்க்கை எப்படி இருக்கும்?"
                                    data-en="How might my career develop?">
                                    Career / வேலை
                                </button>

                                <button type="button" class="astro-example" data-ta="என் காதல் வாழ்க்கை பற்றி சொல்லுங்கள்"
                                    data-en="Give me guidance about my love life">
                                    Love / காதல்
                                </button>

                                <button type="button" class="astro-example"
                                    data-ta="இந்த மாதம் நான் எதில் கவனம் செலுத்த வேண்டும்?"
                                    data-en="What should I focus on this month?">
                                    Monthly guidance
                                </button>
                            </div>
                        </div>
                    @endif

                    @foreach($messages as $message)
                        <div class="astro-message {{ $message['role'] === 'user' ? 'user' : 'assistant' }}">
                            @if($message['role'] !== 'user')
                                <div class="astro-avatar">🔮</div>
                            @endif

                            <div class="astro-bubble">{{ $message['content'] }}</div>

                            @if($message['role'] === 'user')
                                <div class="astro-avatar">🙂</div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <div class="astro-composer">

                    @if(session('success'))
                        <div class="astro-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="astro-errors">
                            @foreach($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form id="astroForm" method="POST" action="{{ route('astrologer-chat.send') }}">
                        @csrf

                        <input type="hidden" name="language" id="formLanguage" value="{{ $language }}">

                        <div class="astro-input-row">
                            <textarea class="astro-input" name="message" id="astroInput" rows="1" maxlength="1000"
                                placeholder="உங்கள் கேள்வியை இங்கே எழுதுங்கள்..." required>{{ old('message') }}</textarea>

                            <button class="astro-send" id="astroSend" type="submit">
                                Send ↑
                            </button>
                        </div>
                    </form>

                    <div class="astro-footnote">
                        AI-generated guidance is for reflection and entertainment.
                        Predictions are not guaranteed.
                    </div>
                </div>
            </div>

            <div class="astro-actions">
                <a href="{{ url('/') }}" class="astro-link">
                    ← Back to Home
                </a>

                @if(count($messages) > 0)
                    <form method="POST" action="{{ route('astrologer-chat.clear') }}"
                        onsubmit="return confirm('Clear this conversation?')">
                        @csrf
                        <button type="submit" class="astro-link">
                            Clear Chat
                        </button>
                    </form>
                @endif
            </div>

        </div>
    </div>

    <script>
        const languageSelect = document.getElementById('languageSelect');
        const formLanguage = document.getElementById('formLanguage');
        const astroInput = document.getElementById('astroInput');
        const astroForm = document.getElementById('astroForm');
        const astroMessages = document.getElementById('astroMessages');
        const astroSend = document.getElementById('astroSend');

        function updateLanguage() {
            const isTamil = languageSelect.value === 'ta';

            formLanguage.value = languageSelect.value;

            astroInput.placeholder = isTamil
                ? 'உங்கள் கேள்வியை இங்கே எழுதுங்கள்...'
                : 'Type your question here...';

            astroSend.textContent = isTamil ? 'அனுப்பு ↑' : 'Send ↑';

            const welcomeTitle = document.getElementById('welcomeTitle');
            const welcomeDescription =
                document.getElementById('welcomeDescription');

            if (welcomeTitle) {
                welcomeTitle.textContent = isTamil
                    ? 'வணக்கம்! என்ன கேட்க விரும்புகிறீர்கள்?'
                    : 'Hello! What would you like to ask?';
            }

            if (welcomeDescription) {
                welcomeDescription.textContent = isTamil
                    ? 'உங்கள் வேலை, காதல், திருமணம் அல்லது பொதுவான ராசி பலன் தொடர்பான கேள்விகளைக் கேளுங்கள்.'
                    : 'Ask about your career, love life, marriage or general astrology-inspired guidance.';
            }

            document.querySelectorAll('.astro-example').forEach(function (button) {
                button.textContent = isTamil
                    ? button.dataset.ta
                    : button.dataset.en;
            });
        }

        languageSelect.addEventListener('change', updateLanguage);

        document.querySelectorAll('.astro-example').forEach(function (button) {
            button.addEventListener('click', function () {
                astroInput.value = languageSelect.value === 'ta'
                    ? button.dataset.ta
                    : button.dataset.en;

                astroInput.focus();
            });
        });

        astroForm.addEventListener('submit', function () {
            astroSend.disabled = true;
            astroSend.textContent = languageSelect.value === 'ta'
                ? 'காத்திருங்கள்...'
                : 'Thinking...';
        });

        updateLanguage();

        astroMessages.scrollTop = astroMessages.scrollHeight;
    </script>
@endsection