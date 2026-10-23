@extends('layouts.app')

@section('title', 'Your Rasi Palan')

@section('content')

    <div class="hero text-center mb-4">
        <div class="fs-1">✨</div>

        <h1 class="h2 fw-bold">உங்கள் ராசி பலன்</h1>

        <h2 class="h4">Your Horoscope</h2>

        <p class="mb-0 mt-3">
            {{ $horoscopeRequest->rasi }}
        </p>
    </div>

    <div class="card main-card p-4 p-md-5">

        <div class="mb-4">
            <h3 class="h4 fw-bold">
                வணக்கம் {{ $horoscopeRequest->name ?: 'நண்பரே' }}!
            </h3>

            <p class="text-secondary mb-1">
                Date of Birth:
                {{ $horoscopeRequest->dob->format('d-m-Y') }}
            </p>

            <p class="text-secondary mb-0">
                Generated:
                {{ $horoscopeRequest->created_at->format('d-m-Y h:i A') }}
            </p>
        </div>

        <hr>

        <div class="horoscope-text">{{ $horoscopeRequest->horoscope }}</div>

        <div class="alert alert-light border mt-4">
            <small>
                This horoscope is AI-generated traditional astrology
                content for entertainment and reflection. It is not a
                guaranteed prediction of future events.
            </small>
        </div>

        <a href="{{ route('horoscope.index') }}" class="btn btn-astrology mt-3">
            ← Generate Another Horoscope
        </a>

    </div>

@endsection