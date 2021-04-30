<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $title = "Slider";

        $slider = Slider::get();

        return view('page.admin.input_slider')->with(compact('title','slider'));
    }

    public function inputSliderSubmit(Request $r){
        $a = Slider::find(1);

        if ($r->exists('foto_slider1')) {
            $foto_slider1 = $r->file('foto_slider1');
            $nama_slider1 = "foto_slider1_".Carbon::now()->timestamp."_".$foto_slider1->getClientOriginalName();
            $tujuan_foto1 = 'assets/images/slider/';
            $foto_slider1->move($tujuan_foto1, $nama_slider1);

            $a->slider = $nama_slider1;
        }
        $a->judul = $r->judul_slider1;
        $a->deskripsi = $r->desk_slider1;
        $a->link = $r->link_slider1;
        $a->save();

        $a = Slider::find(2);
        if ($r->exists('foto_slider2')) {
            $foto_slider2 = $r->file('foto_slider2');
            $nama_slider2 = "foto_slider2_".Carbon::now()->timestamp."_".$foto_slider2->getClientOriginalName();
            $tujuan_foto2 = 'assets/images/slider/';
            $foto_slider2->move($tujuan_foto2, $nama_slider2);

            $a->slider = $nama_slider2;
        }
        $a->judul = $r->judul_slider2;
        $a->deskripsi = $r->desk_slider2;
        $a->link = $r->link_slider2;
        $a->save();

        $a = Slider::find(3);
        if ($r->exists('foto_slider3')) {
            $foto_slider3 = $r->file('foto_slider3');
            $nama_slider3 = "foto_slider3_".Carbon::now()->timestamp."_".$foto_slider3->getClientOriginalName();
            $tujuan_foto3 = 'assets/images/slider/';
            $foto_slider3->move($tujuan_foto3, $nama_slider3);

            $a->slider = $nama_slider3;
        }
        $a->judul = $r->judul_slider3;
        $a->deskripsi = $r->desk_slider3;
        $a->link = $r->link_slider3;
        $a->save();

        $a = Slider::find(4);
        if ($r->exists('foto_slider4')) {
            $foto_slider4 = $r->file('foto_slider4');
            $nama_slider4 = "foto_slider4_".Carbon::now()->timestamp."_".$foto_slider4->getClientOriginalName();
            $tujuan_foto4 = 'assets/images/slider/';
            $foto_slider4->move($tujuan_foto4, $nama_slider4);

            $a->slider = $nama_slider4;
        }
        $a->judul = $r->judul_slider4;
        $a->deskripsi = $r->desk_slider4;
        $a->link = $r->link_slider4;
        $a->save();

        return redirect()->back();
    }
}
