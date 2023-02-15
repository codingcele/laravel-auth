@extends('layouts.main-layout')

@section('content')
    
    <h1>Project name: {{ $project -> name }}</h1>
    <h2>Project description: {{ $project -> description }}/10</h2>
    <h3>Project image: {{ $project -> main_image }}</h3>
    <h3>Project release date: {{ $project -> release_date }}</h3>
    <h3>Project repo: {{ $project -> repo_link }}</h3>

@endsection