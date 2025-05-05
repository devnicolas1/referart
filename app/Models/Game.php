<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cover_art',
        'review',
        'score'
    ];

    /**
     * Get the user that owns the game review.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
