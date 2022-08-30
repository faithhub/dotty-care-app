<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'paramedic_id',
        'user_id',
        'data',
        'is_filled'
    ];

    protected $casts = [
        'data' => 'array'
    ];
}