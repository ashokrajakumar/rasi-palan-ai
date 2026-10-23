<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Love & Marriage Compatibility</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm mx-auto" style="max-width: 650px;">
            <div class="card-body p-4">
                <h2 class="text-center mb-2">❤️ Compatibility</h2>
                <p class="text-center text-muted">
                    Explore your astrology-inspired relationship guidance
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('compatibility.generate') }}">
                    @csrf

                    <label class="form-label">Compatibility Type</label>
                    <select name="compatibility_type" class="form-select mb-3" required>
                        <option value="love">Love Compatibility</option>
                        <option value="marriage">Marriage Compatibility</option>
                    </select>

                    <label class="form-label">Person 1 Rasi</label>
                    <select name="person_one_rasi" class="form-select mb-3" required>
                        @foreach ($rasis as $rasi)
                            <option value="{{ $rasi }}">{{ $rasi }}</option>
                        @endforeach
                    </select>

                    <label class="form-label">Person 2 Rasi</label>
                    <select name="person_two_rasi" class="form-select mb-3" required>
                        @foreach ($rasis as $rasi)
                            <option value="{{ $rasi }}">{{ $rasi }}</option>
                        @endforeach
                    </select>

                    <label class="form-label">Result Language</label>
                    <select name="language" class="form-select mb-4" required>
                        <option value="ta">தமிழ்</option>
                        <option value="en">English</option>
                    </select>

                    <button type="submit" class="btn btn-primary w-100">
                        Check Compatibility
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>