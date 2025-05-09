<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'cover_art',
        'name',
        'review',
        'score',
        'status',
    ];

    /**
     * Get the user that owns the book review.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
