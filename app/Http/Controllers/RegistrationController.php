<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registrationForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        print_r($request->all());
    }
}
