@extends('layouts.main-layout')

@section('content')
    
    <div class="container">
        <h1>Project name: {{ $project -> name }}</h1>
        <h2>Project description: {{ $project -> description }}</h2>
        <h3>
            Project image: <img class="projectImg" src="{{ asset('storage/' . $project -> main_image) }}" alt=""> 
        </h3>
        <h3>Project release date: {{ $project -> release_date }}</h3>
        <h3>Project repo: {{ $project -> repo_link }}</h3>
    </div>

@endsection