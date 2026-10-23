<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoroscopeRequest extends Model
{
    protected $fillable = [
        'name',
        'dob',
        'rasi',
        'horoscope',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
        ];
    }
}