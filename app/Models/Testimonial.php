<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'author',
        'expertise',
        'testimonial',
        'image',
        'stars',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
