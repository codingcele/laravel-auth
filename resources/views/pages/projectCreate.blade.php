@extends('layouts.main-layout')

@section('content')
    
    <div class="container">

        <div class="row">

            <div class="col">
                <h1>New project</h1>
            </div>
            
        </div>

        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description">
            <br>
            <label for="main_image">Main image</label>
            <input type="file" name="main_image">
            <br>
            <label for="release_date">Release date</label>
            <input type="date" name="release_date">
            <br>
            <label for="repo_link">Repo link</label>
            <input type="url" name="repo_link">
            <br>
            <input type="submit" value="ADD NEW PROJECT">
        </form>

    </div>

@endsection