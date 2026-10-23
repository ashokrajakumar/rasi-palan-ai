<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class OpenAIHoroscopeService
{
    public function generate(
        string $dob,
        string $rasi,
        ?string $name = null
    ): string {
        $apiKey = config('services.groq.key');
        $model = config('services.groq.model');

        if (empty($apiKey)) {
            throw new RuntimeException(
                'Groq API key missing. Check your .env file.'
            );
        }

        $prompt = "
Generate a traditional daily astrology horoscope.

Name: " . ($name ?: 'Guest') . "
Date of birth: {$dob}
Selected Rasi: {$rasi}

Write the horoscope in Tamil first and English second.

Include:
1. Overall outlook
2. Career and work
3. Money and finance
4. Love and relationships
5. Family
6. Health and wellbeing

Use simple, friendly language.
Do not guarantee future events.
Do not invent planetary positions.
Keep Tamil and English sections separate.
This is traditional astrology for entertainment and reflection.
";

        $response = Http::withToken($apiKey)
            ->acceptJson()
            ->timeout(60)
            ->post(
                'https://api.groq.com/openai/v1/chat/completions',
                [
                    'model' => $model,
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a responsible Tamil and English traditional astrology content writer.',
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt,
                        ],
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 1800,
                ]
            );

        if ($response->failed()) {
            $status = $response->status();
            $apiMessage = $response->json('error.message');

            logger()->error('Groq API request failed', [
                'status' => $status,
                'message' => $apiMessage,
            ]);

            throw new RuntimeException(
                "Groq API failed (HTTP {$status}). " .
                ($apiMessage ?: 'Check API key, model and usage limits.')
            );
        }

        $text = $response->json('choices.0.message.content');

        if (!is_string($text) || trim($text) === '') {
            throw new RuntimeException(
                'Groq returned an empty horoscope. Please try again.'
            );
        }

        return trim($text);
    }
}