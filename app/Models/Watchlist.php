<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'film_id',
    ];

    /**
     * Get the user that owns the watchlist.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the film that is associated with the watchlist.
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}