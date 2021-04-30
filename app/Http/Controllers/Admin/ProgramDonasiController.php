<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panti;
use App\Models\Program;
use Carbon\Carbon;

class ProgramDonasiController extends Controller
{
    private $title = "Program Donasi";
    public function index(){
        $title = $this->title;
        $donasi = Program::orderBy('created_at', 'desc')->get();
        return view('page.admin.program_donasi')->with(compact('title','donasi'));
    }

    public function addProgramDonasi(){
        $title = $this->title;

        $panti = Panti::orderBy('nama', 'asc')->get();

        return view('page.admin.program_donasi_add')->with(compact('title','panti'));
    }

    public function addProgramDonasiSubmit(Request $r){
        $foto = $r->file('foto');
        $nama_foto = "programdonasi_".Carbon::now()->timestamp."_".$foto->getClientOriginalName();
        $tujuan_foto = 'assets/images/program_donasi/';
        $foto->move($tujuan_foto, $nama_foto);

        $a = new Program;
        $a->nama = $r->nama;
        $a->panti_id = $r->panti;
        $a->ktg = $r->ktg;
        $a->foto = $nama_foto;
        $a->progres = $r->progres;
        $a->target = $r->target;
        $a->deskripsi = $r->deskripsi;
        $a->save();

        return redirect('/admin/program-donasi');
    }

    public function editProgramDonasi($id){
        $title = $this->title;
        $d = Program::where('id',$id)->first();
        $panti = Panti::orderBy('nama', 'asc')->get();
        return view('page.admin.program_donasi_edit')->with(compact('title','d','panti'));
    }

    public function editProgramDonasiSubmit(Request $r){
        $a = Program::find($r->id);
        $a->nama = $r->nama;
        $a->panti_id = $r->panti;
        $a->ktg = $r->ktg;
        $a->progres = $r->progres;
        $a->target = $r->target;
        $a->deskripsi = $r->deskripsi;
        if ($r->filled('foto')) {
            $foto = $r->file('foto');
            $nama_foto = "foto_".Carbon::now()->timestamp."_".$foto->getClientOriginalName();
            $tujuan_foto = 'assets/images/panti/';
            $foto->move($tujuan_foto, $nama_foto);
            $a->foto = $nama_foto;
        }
        $a->save();

        return redirect('/admin/program-donasi');
    }
}
