<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compatibility Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm mx-auto" style="max-width: 800px;">
            <div class="card-body p-4">
                <h2 class="mb-3">❤️ Compatibility Result</h2>

                <p>
                    <strong>Type:</strong>
                    {{ ucfirst($record->compatibility_type) }}
                </p>

                <p>
                    <strong>Person 1:</strong>
                    {{ $record->person_one_rasi }}
                </p>

                <p>
                    <strong>Person 2:</strong>
                    {{ $record->person_two_rasi }}
                </p>

                <hr>

                <div style="white-space: pre-wrap;">{{ $record->result }}</div>

                <p class="small text-muted mt-4">
                    This is general astrology-inspired guidance, not a guarantee
                    of relationship or marriage outcomes.
                </p>

                <a href="{{ route('compatibility.index') }}" class="btn btn-primary mt-3">
                    Check Another Match
                </a>
            </div>
        </div>
    </div>
</body>

</html>