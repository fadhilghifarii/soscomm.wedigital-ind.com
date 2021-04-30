<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewPantiController extends Controller
{
    public function index(){
        $title = "View Panti";

        return view('page.view_panti_asuhan')->with(compact('title'));
    }
}
