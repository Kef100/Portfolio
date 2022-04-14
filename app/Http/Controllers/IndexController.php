<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class IndexController
{

    public function index()
    {
        $slides = Portfolio::take(4)->orderBy('created_at', 'desc')->get();

        return view('index.index', compact('slides'));
    }
}
