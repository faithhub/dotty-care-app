<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'user_id',
        'details_id',
        'paramedic_id',
        'detail_id',
        'report',
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function paramedic()
    {
        return $this->belongsTo(User::class, 'paramedic_id');
    }
    public function detail()
    {
        return $this->belongsTo(UserData::class, 'detail_id');
    }
}