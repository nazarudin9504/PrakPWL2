@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Joined: {{ $user->created_at->format('M d, Y') }}</p>
@endsection