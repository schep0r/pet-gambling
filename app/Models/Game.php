<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function reels(): HasMany
    {
        return $this
            ->hasMany(Reel::class)
            ->where('is_bonus', false)
            ->orderBy('position')
        ;
    }

    public function bonusReels(): HasMany
    {
        return $this
            ->hasMany(Reel::class)
            ->where('is_bonus', true)
            ->orderBy('position')
            ;
    }
}
