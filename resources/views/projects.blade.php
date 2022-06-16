@extends('layouts.default')

@include('shared.header')

@section('content')
    @include('shared.spotify', compact('spotifyData'))

@endsection
