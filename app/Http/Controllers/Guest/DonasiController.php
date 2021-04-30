<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index(){
        $title = "Donasi";

        return view('page.donasi')->with(compact('title'));
    }
}
