<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
        // return Socialite::driver('google')->stateless()->redirect();
    }

    public function callback($value = '')
    {
        // dd($value);
        $userg = Socialite::driver('google')->stateless()->user();
        $user = User::where('google_id', $userg->id)->first();
        // dd($userg);
        if (!empty($user)) {
            $credentials = [
                'email' => $user->email,
                'password' => '12345678'
            ];

            if (Auth::attempt($credentials)) {
                // Gate::define('isDonatur', function (User $userc) {
                //     return $userc->role === 'donatur';
                // });
                if (Gate::allows('isDonatur')) {
                    // dd("sudah");
                    return redirect('/donatur/profil');
                }
            }
        } else {
            $newUser = User::create([
                "name" => $userg->name,
                "email" => $userg->email,
                "google_id" => $userg->id,
                "role" => 'donatur',
                "password" => Hash::make('12345678'),
            ]);

            $credentials = [
                'email' => $newUser->email,
                'password' => '12345678'
            ];

            if (Auth::attempt($credentials)) {
                // Gate::define('isDonatur', function (User $user) {
                //     return $user->role === 'donatur';
                // });
                if (Gate::allows('isDonatur')) {
                    dd("belum");
                    // return redirect('/donatur/profil');
                }
            }
        }
    }
}
