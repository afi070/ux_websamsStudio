<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Mengizinkan semua kolom untuk diisi (Mass Assignment)
    protected $guarded = [];

    /**
     * Get the watchlists that include this film.
     */
    public function watchlists()
    {
        return $this->hasMany(Watchlist::class);
    }
}