<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = "Home";

        $slider = Slider::orderBy('id','asc')->get();
        return view('page.index')->with(compact('title','slider'));
    }

    public function detailProgramDonasi(){
        $title = "Home";

        return view('page.detail_program_donasi');
    }

    public function donasi(){
        $title = "Home";

        return view('page.donasi');
    }
}
