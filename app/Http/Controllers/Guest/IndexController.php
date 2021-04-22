<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function detailProgramDonasi(){
        return view('page.detail_program_donasi');
    }

    public function donasi(){
        return view('page.donasi');
    }
}
