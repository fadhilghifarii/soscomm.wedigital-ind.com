<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function index(){
        return view('page.login');
    }

    public function loggedIn(Request $request){
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login

            // return redirect('berhasil');
            if (Gate::allows('isAdmin')) {
                // return redirect('/admin/dashboard');
                return redirect()->intended('/admin/dashboard');
            }
            if (Gate::allows('isDonatur')) {
                // return redirect('/admin/profil');
                return redirect()->intended('/admin/profil');
            }
        }
        // if failed login
        return redirect('/login');
    }
}
