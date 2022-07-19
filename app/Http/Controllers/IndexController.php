<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Preference;
use App\Models\Testimonial;

class IndexController extends SpotifyController
{
    public function index()
    {
        $slides = Portfolio::take(4)->orderBy('created_at', 'desc')->get();
        $preferences = Preference::take(3)->orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::take(6)->orderBy('created_at', 'desc')->get();

        $spotifyData = $this->getCurrentPlaying();

        return view('index.index', compact('slides', 'preferences', 'testimonials', 'spotifyData'));
    }
}
