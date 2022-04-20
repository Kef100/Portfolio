<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Preference;
use App\Models\SpotifyToken;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class IndexController extends Controller
{
    public function index()
    {
        $slides = Portfolio::take(4)->orderBy('created_at', 'desc')->get();
        $preferences = Preference::take(3)->orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::take(5)->orderBy('created_at', 'desc')->get();

        $spotifyData = $this->getCurrentPlaying();

        return view('index.index', compact('slides', 'preferences', 'testimonials', 'spotifyData'));
    }

    private function getCurrentPlaying()
    {
        $access_token = SpotifyToken::first()->access_token;

        $request = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $access_token,
        ])->get("https://api.spotify.com/v1/me/player/currently-playing");

        if ($request->getStatusCode() == 401 || $request->getStatusCode() == 403) {
            $this->refreshSpotifyToken();
            return $this->getCurrentPlaying();
        }

        $requestJson = $request->json();

        foreach($requestJson['item']['artists'] as $artist) {
            $artists[] = $artist['name'];
        }

        return [
            "track" => $requestJson['item']['name'],
            "artists" => $artists,
            "album" => $requestJson['item']['album']['images'][0]['url'],
            "is_playing" => $requestJson['is_playing'],
        ];
    }

    private function refreshSpotifyToken()
    {
        $tokens = SpotifyToken::first();

        $request = Http::asForm()->withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('SPOTIFY_CLIENT_ID') . ":" . env('SPOTIFY_CLIENT_SECRET')),
        ])->post("https://accounts.spotify.com/api/token",[
                'grant_type' => 'refresh_token',
                'refresh_token' => $tokens->refresh_token,
            ])->json();

        $tokens->access_token = $request['access_token'];
        $tokens->save();
    }

    public function spotify()
    {
        return Socialite::driver('spotify')->scopes(['user-read-currently-playing'])->redirect();
    }

    public function spotifyCallback()
    {
        $spotifyUser = Socialite::driver('spotify')->stateless()->user();
        dd($spotifyUser);
    }
}
