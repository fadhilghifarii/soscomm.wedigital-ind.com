<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index(){
        $title = "Donatur";

        return view('page.admin.donatur')->with(compact('title'));
    }
}
