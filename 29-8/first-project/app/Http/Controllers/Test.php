<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser;
use Illuminate\Support\Facades\Hash;


class Test extends Controller
{
    
    public function handleFormSubmission(Request $request){
        
        $submittedEmail = $request->input('email');
        $submittedPassword = $request->input('password');
    
        $users = MyUser::all(['email', 'pass']);
    
        $credentialsMatch = $users->contains(function ($user) use ($submittedEmail, $submittedPassword) {
            return $user->email === $submittedEmail && $user->pass === $submittedPassword;
        });
    
        if ($credentialsMatch) {
            // return redirect()->route('success-page')->with('success', 'Form submitted successfully.');
            return view('home', compact('submittedEmail'));
        } else {
            // return redirect()->back()->with('error', 'Invalid credentials.');
            return view('welcome');
        }
    }

    public function showSuccessPage()
    {
        return view('home'); 
    }
}
