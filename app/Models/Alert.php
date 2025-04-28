<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'disaster_type',
        'location',
        'severity',
        'occurred_at',
        'description',
        'image_path',
        'status'
    ];

    protected $casts = [
        'occurred_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
