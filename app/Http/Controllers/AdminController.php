<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Project;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $users = User::all();
        $skills = Skill::all();
        $projects = Project::all();
        $photos = Photo::all();

        return view('admin.index', compact('users', 'skills', 'projects', 'photos'));
    }

}
