<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function home() {

        $projects = Project :: all();

        return view('pages.home', compact('projects'));

    }

    public function logged() {

        return view('pages.logged');

    }

    public function projectShow(Project $project) {

        return view('pages.projectShow', compact('project'));
    }

    public function projectCreate() {

        return view('pages.projectCreate');
    }

    public function projectStore(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|min:2|max:128|unique:projects',
            'description' => 'nullable|string',
            'main_image' => 'required|url|unique:projects',
            'release_date' => 'required|date|before_or_equal:today',
            'repo_link' => 'required|url|unique:projects',
        ]);
    
        $project = new Project();
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('home');
    }

    public function projectDelete(Project $project) {

        $project -> delete();
    
        return redirect() -> route('home');
    }

    public function projectEdit(Project $project) {

        return view('pages.projectEdit', compact('project'));
    }

    public function projectUpdate(Request $request, Project $project) {

        $data = $request -> validate([
            'name' => 'required|string|max:128',
            'description' => 'nullable|string',
            'main_image' => 'required|url',
            'release_date' => 'required|date',
            'repo_link' => 'required|url',
        ]);
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('home');
    }

}
