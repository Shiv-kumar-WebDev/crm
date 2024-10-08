<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function loginPost(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }

        return redirect(route('login'))->with('error','Login failed');
    }

    public function registerPost(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|confirmed',
            'password' => 'required|string|min:8',
            'remember' => 'required',
        ], [
            'remember.required' => 'Please accept term and service.'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            return redirect(route('login'))->with('success','User created successfully');
        }

        return redirect(route('register'))->with('error','Failed to create account');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token to prevent attacks
        $request->session()->regenerateToken();

        // Redirect to login page or home page
        return redirect()->route('login');
    }
}
