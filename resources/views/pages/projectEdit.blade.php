@extends('layouts.main-layout')

@section('content')
    
    <div class="container">

        <div class="row">

            <div class="col">
                <h1>Modify project</h1>
            </div>
            
        </div>

        <form method="POST" action="{{ route('project.update', $project) }}" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value={{ $project -> name }}>
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" value={{ $project -> description }}>
            <br>
            <label for="main_image">Main image</label>
            <input type="file" name="main_image" value={{ $project -> main_image }}>
            <br>
            <label for="release_date">Release date</label>
            <input type="date" name="release_date" value={{ $project -> release_date }}>
            <br>
            <label for="repo_link">Repo link</label>
            <input type="url" name="repo_link" value={{ $project -> repo_link }}>
            <br>
            <input type="submit" value="UPDATE PROJECT">
        </form>

    </div>

@endsection