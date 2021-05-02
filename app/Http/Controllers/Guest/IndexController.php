<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Panti;
use App\Models\Program;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $title = "Home";

        $slider = Slider::orderBy('id', 'asc')->get();
        $program = Program::orderBy('id', 'desc')->limit(6)->get();
        $program_count = Program::orderBy('id', 'desc')->limit(6)->count();
        $panti = Panti::orderBy('id', 'desc')->limit(6)->get();

        return view('page.index')->with(compact('title', 'slider', 'program', 'program_count', 'panti'));
    }

    public function viewProgramDonasi()
    {
        $title = "Semua Program Donasi";

        $program = Program::orderBy('id', 'desc')->get();

        return view('page.view_program_donasi')->with(compact('title', 'program'));
    }

    public function viewProgramDonasiSearch(Request $r)
    {
        $title = "Search Program Donasi";

        $program = Program::where('nama', 'like', '%' . $r->nama . '%')->get();

        return view('page.view_program_donasi')->with(compact('title', 'program'));
    }

    public function detailProgramDonasi($id)
    {
        $title = "Detail Program Donasi";

        $p = Program::where('id', $id)->get()[0];

        return view('page.detail_program_donasi')->with(compact('title', 'p'));
        // return response()->json($p);
    }

    public function viewPantiAsuhan()
    {
        $title = "Semua Panti Asuhan";

        $panti = Panti::orderBy('id', 'desc')->get();

        return view('page.view_panti_asuhan')->with(compact('title', 'panti'));
    }

    public function viewPantiAsuhanSearch(Request $r)
    {
        $title = "Search Panti Asuhan";

        $panti = Panti::where('nama', 'like', '%' . $r->nama . '%')->get();

        return view('page.view_panti_asuhan')->with(compact('title', 'panti'));
    }

    public function detailPantiAsuhan($id)
    {
        $title = "Detail Program Donasi";

        $pt = Panti::where('id', $id)->get()[0];

        return view('page.detail_panti_asuhan')->with(compact('title', 'pt'));
        // return response()->json($p);
    }

    public function donasi()
    {
        $title = "Home";

        return view('page.donasi');
    }
}
