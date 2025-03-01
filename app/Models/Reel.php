<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reel extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'is_bonus',
        'values',
    ];

    protected $casts = [
        'values' => 'array',
    ];
}
