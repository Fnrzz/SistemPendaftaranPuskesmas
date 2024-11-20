<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.index');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'no_nik' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        $data['role'] = 'user';

        User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'no_nik' => $data['no_nik'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role']
        ]);

        return redirect('/login')->with('success', 'Registrasi Berhasilus');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            }else{
                return redirect()->route('user');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
