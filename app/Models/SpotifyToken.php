<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotifyToken extends Model
{
    protected $table = 'spotify_token';
    protected $fillable =
        [
            'access_token',
            'refresh_token'
        ];
}
