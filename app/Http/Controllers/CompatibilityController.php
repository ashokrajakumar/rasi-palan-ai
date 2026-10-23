<?php

namespace App\Http\Controllers;

use App\Models\CompatibilityRequest;
use App\Services\OpenAIHoroscopeService;
use Illuminate\Http\Request;

class CompatibilityController extends Controller
{
    private array $rasis = [
        'மேஷம் (Aries)',
        'ரிஷபம் (Taurus)',
        'மிதுனம் (Gemini)',
        'கடகம் (Cancer)',
        'சிம்மம் (Leo)',
        'கன்னி (Virgo)',
        'துலாம் (Libra)',
        'விருச்சிகம் (Scorpio)',
        'தனுசு (Sagittarius)',
        'மகரம் (Capricorn)',
        'கும்பம் (Aquarius)',
        'மீனம் (Pisces)',
    ];

    public function index()
    {
        return view('compatibility.index', [
            'rasis' => $this->rasis,
        ]);
    }

    public function generate(
        Request $request,
        OpenAIHoroscopeService $horoscopeService
    ) {
        $validated = $request->validate([
            'person_one_rasi' => ['required', 'in:' . implode(',', $this->rasis)],
            'person_two_rasi' => ['required', 'in:' . implode(',', $this->rasis)],
            'compatibility_type' => ['required', 'in:love,marriage'],
            'language' => ['required', 'in:ta,en'],
        ]);

        $type = $validated['compatibility_type'] === 'love'
            ? 'Love Compatibility'
            : 'Marriage Compatibility';

        $language = $validated['language'] === 'ta'
            ? 'Tamil'
            : 'English';

        $prompt = "
You are an astrology-themed relationship guidance assistant.

Create a {$type} report for two people using these Rasis:
Person 1: {$validated['person_one_rasi']}
Person 2: {$validated['person_two_rasi']}

Output language: {$language}.

Include:
1. Overall compatibility
2. Emotional connection
3. Communication
4. Strengths of the relationship
5. Potential challenges
6. Practical relationship advice
7. A short conclusion

Be warm, respectful and clear. Do not claim that Rasi alone
can scientifically predict relationship success or marriage.
Do not invent exact traditional Porutham scores.
Present the report as general astrology-inspired guidance.
";

        // Reuse the existing Groq service.
        // Change the method name below if your service uses a different method.
        $result = $horoscopeService->generateHoroscope($prompt);

        $record = CompatibilityRequest::create([
            'person_one_rasi' => $validated['person_one_rasi'],
            'person_two_rasi' => $validated['person_two_rasi'],
            'compatibility_type' => $validated['compatibility_type'],
            'language' => $validated['language'],
            'result' => $result,
        ]);

        return redirect()->route('compatibility.result', $record);
    }

    public function result(CompatibilityRequest $compatibilityRequest)
    {
        return view('compatibility.result', [
            'record' => $compatibilityRequest,
        ]);
    }
}