<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewPantiController extends Controller
{
    public function index(){
        return view('page.view_panti_asuhan');
    }
}
