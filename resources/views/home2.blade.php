@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to My Website!</h2>
    <p>This is the home page content.</p>

    <p>Welcome, Guest!</p>

    <h3>Our Services</h3>
    <ul>
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
@endsection
