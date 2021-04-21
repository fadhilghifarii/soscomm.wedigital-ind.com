<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewProgramDonasiController extends Controller
{
    public function index(){
        return view('page.view_program_donasi');
    }
}
