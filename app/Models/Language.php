<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'locale',
    ];

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, "language_id");
    }
}
