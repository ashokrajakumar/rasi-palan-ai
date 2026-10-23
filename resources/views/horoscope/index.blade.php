@extends('layouts.app')

@section('title', 'Rasi Palan AI - Daily Horoscope')

@section('content')

    <div class="hero text-center mb-4">
        <div class="fs-1 mb-2">🔮</div>

        <h1 class="fw-bold">உங்கள் ராசி பலன்</h1>

        <h2 class="h4">Your Daily Horoscope</h2>

        <p class="mb-0 mt-3">
            Discover your daily horoscope in Tamil and English.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card main-card p-4 p-md-5">

                <h3 class="h4 fw-bold mb-4">
                    Enter Your Details
                </h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('horoscope.generate') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Name / பெயர்
                        </label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            value="{{ old('name') }}" maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">
                            Date of Birth / பிறந்த தேதி
                        </label>

                        <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}"
                            max="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="rasi" class="form-label">
                            Select Your Rasi / உங்கள் ராசி
                        </label>

                        <select name="rasi" id="rasi" class="form-select" required>
                            <option value="">Choose your Rasi</option>

                            @foreach ($rasis as $key => $value)
                                <option value="{{ $key }}" @selected(old('rasi') === $key)>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-astrology w-100 py-3">
                        ✨ Generate Rasi Palan
                    </button>

                    <p class="text-secondary text-center mt-3 mb-0 small">
                        AI-generated predictions in Tamil and English.
                    </p>
                </form>

            </div>
        </div>
    </div>

@endsection