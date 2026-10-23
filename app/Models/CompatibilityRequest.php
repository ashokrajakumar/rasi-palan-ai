<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompatibilityRequest extends Model
{
    protected $fillable = [
        'person_one_rasi',
        'person_two_rasi',
        'compatibility_type',
        'language',
        'result',
    ];
}