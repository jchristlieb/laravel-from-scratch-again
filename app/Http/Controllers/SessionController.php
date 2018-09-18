<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate request
        $this->validate($request, [
            'email' => 'required|email|present',
            'password' => 'required|present',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return view('home');
        }

        // if attempt fails
        $errors = new MessageBag(['password' => ['Email/password combination does not exist']]);
        return redirect()->route('session.create')
            ->withErrors($errors);
    }

    public function destroy()
    {
        // log user out
        auth()->logout();
        return view('home');
    }
}
