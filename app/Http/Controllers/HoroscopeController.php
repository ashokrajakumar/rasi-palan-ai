<?php

namespace App\Http\Controllers;

use App\Models\HoroscopeRequest;
use App\Services\OpenAIHoroscopeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use RuntimeException;
use Throwable;

class HoroscopeController extends Controller
{
    private array $rasis = [
        'Mesham' => 'மேஷம் (Aries)',
        'Rishabam' => 'ரிஷபம் (Taurus)',
        'Mithunam' => 'மிதுனம் (Gemini)',
        'Kadagam' => 'கடகம் (Cancer)',
        'Simmam' => 'சிம்மம் (Leo)',
        'Kanni' => 'கன்னி (Virgo)',
        'Thulam' => 'துலாம் (Libra)',
        'Viruchigam' => 'விருச்சிகம் (Scorpio)',
        'Dhanusu' => 'தனுசு (Sagittarius)',
        'Magaram' => 'மகரம் (Capricorn)',
        'Kumbam' => 'கும்பம் (Aquarius)',
        'Meenam' => 'மீனம் (Pisces)',
    ];

    public function index()
    {
        return view('horoscope.index', [
            'rasis' => $this->rasis,
        ]);
    }

    public function generate(
        Request $request,
        OpenAIHoroscopeService $aiService
    ) {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:100'],
            'dob' => ['required', 'date', 'before_or_equal:today'],
            'rasi' => [
                'required',
                'string',
                Rule::in(array_keys($this->rasis)),
            ],
        ]);

        try {
            $horoscope = $aiService->generate(
                $validated['dob'],
                $this->rasis[$validated['rasi']],
                $validated['name'] ?? null
            );

            $record = HoroscopeRequest::create([
                'name' => $validated['name'] ?? null,
                'dob' => $validated['dob'],
                'rasi' => $this->rasis[$validated['rasi']],
                'horoscope' => $horoscope,
            ]);

            return redirect()->route('horoscope.result', $record->id);

        } catch (Throwable $exception) {
            Log::error('Horoscope generation failed', [
                'message' => $exception->getMessage(),
            ]);

            $message = $exception instanceof RuntimeException
                ? $exception->getMessage()
                : 'Something went wrong. Please try again later.';

            return back()
                ->withInput($request->only('name', 'dob', 'rasi'))
                ->withErrors(['ai' => $message]);
        }
    }

    public function result(HoroscopeRequest $horoscopeRequest)
    {
        return view('horoscope.result', [
            'horoscopeRequest' => $horoscopeRequest,
        ]);
    }
}