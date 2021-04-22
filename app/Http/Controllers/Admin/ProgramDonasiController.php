<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panti;
class ProgramDonasiController extends Controller
{
    private $title = "Program Donasi";
    public function index(){
        $title = $this->title;
        $panti = Panti::get();
        return view('page.admin.program_donasi')->with(compact('title','panti'));
    }

    public function addProgramDonasi(){
        $title = $this->title;

        $panti = Panti::get();

        return view('page.admin.program_donasi_add')->with(compact('title','panti'));
    }

    public function addProgramDonasiSubmit(Request $r){

    }

    public function editProgramDonasi(){
        $title = $this->title;

        return view('page.admin.program_donasi_edit')->with(compact('title'));
    }

    public function editProgramDonasiSubmit(Request $r){
    }
}
