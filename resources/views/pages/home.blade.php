@extends('layouts.main-layout')

@section('content')

    <div class="container">
        <h1>Projects:</h1>

        @auth
        <h3>
            <a href="{{ route('project.create') }}">CREATE NEW PROJECT</a>
        </h3>
        @endauth

        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('project.show', $project) }}">
                        {{ $project -> name }} <br>
                        {{ $project -> description }} <br>
                        {{ $project -> release_date }}
                    </a>
                    @auth
                    --
                    <a href="{{ route('project.edit', $project) }}"> MODIFY</a>
                    @endauth
                    @auth
                    --
                    <a href="{{ route('project.delete', $project) }}"> DELETE</a>
                    @endauth
                </li>
                <br>
            @endforeach
        </ul>

    </div>

@endsection