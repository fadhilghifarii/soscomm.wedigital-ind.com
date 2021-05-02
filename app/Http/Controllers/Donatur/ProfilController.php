<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $u = User::where('id', Auth::user()->id)->get()[0];
        return view('page.donatur.profile')->with(compact('u'));
    }
}
