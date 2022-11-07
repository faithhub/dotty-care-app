<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
        'paramedic_id',
        'user_id',
        'call_details',
        'assessment',
        'treatment',
        'file',
        'is_call_details_filled',
        'is_assessment_filled',
        'is_treatment_filled',
        'is_filled'
    ];

    protected $casts = [
        // 'call_details' => 'array',
        // 'assessment' => 'array',
        // 'treatment' => 'array'
    ];
}