@extends("layouts.admin")

@section("content")
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
    <p>{{ Auth::user()->email }}</p>
@endsection
