@extends('layouts.app')

@section('content')
  <h1>Welcome to Blade Templates</h1>

  @if($user)
    <p>Hello, {{ $user['name'] }}!</p>
  @else
    <p>Hello, Guest!</p>
  @endif

  <x-alert type="success" message="You're viewing a reusable component!" />
@endsection
