<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $title = "Slider";

        return view('page.admin.input_slider')->with(compact('title'));
    }
}
