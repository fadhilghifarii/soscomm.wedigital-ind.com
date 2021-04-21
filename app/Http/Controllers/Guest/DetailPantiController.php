<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailPantiController extends Controller
{
    public function index(){
        return view('page.detail_panti_asuhan');
    }
}
