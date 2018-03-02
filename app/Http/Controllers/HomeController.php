<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index() {
        $user = User::where('role_id', 2)->first();

        if($user) {
            $projects = $user->projects()->paginate(8);
        }

        return view('home', compact('user', 'projects'));
    }

    public function contact() {
        $user = User::where('role_id', 2)->first();

        return view('contact', compact('user'));
    }

    public function sendMail(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->message
        ];

        Mail::send('emails.contact', $data, function($message){
            $message->to('madalin.gavrila13@yahoo.com', 'Madalin Gavrila')->subject('Contact');
        });

        $request->session()->flash('contact_mail', 'Your email was sent !');

        return redirect('/contact');
    }

}
