<?php

namespace App\Http\Controllers;

class ProjectController extends SpotifyController
{

    public function index()
    {
        $spotifyData = $this->getCurrentPlaying();

        return view('projects', compact('spotifyData'));
    }
}
