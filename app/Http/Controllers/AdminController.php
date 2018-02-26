<?php

namespace App\Http\Controllers;

use App\Skill;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $users = User::all();
        $skills = Skill::all();

        return view('admin.index', compact('users', 'skills'));
    }

}
