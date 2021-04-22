<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panti;
use Carbon\Carbon;

class PantiController extends Controller
{
    private $title = "Panti";
    public function index(){
        $title = $this->title;
        $panti = Panti::get();
        // $panti->deskripsi = \Illuminate\Support\Str::limit($panti->deskripsi, 50, $end='.......');
        return view('page.admin.panti')->with(compact('title','panti'));
    }

    public function addPanti(){
        $title = $this->title;
        return view('page.admin.panti_add')->with(compact('title'));
    }

    public function addPantiSubmit(Request $r){
        $foto = $r->file('foto');
        $nama_foto = "foto_".Carbon::now()->timestamp."_".$foto->getClientOriginalName();
        $tujuan_foto = 'assets/images/panti/';
        $foto->move($tujuan_foto, $nama_foto);

        $akte = $r->file('akte');
        $nama_akte = "akte_".Carbon::now()->timestamp."_".$akte->getClientOriginalName();
        $tujuan_akte = 'assets/images/akte/';
        $akte->move($tujuan_akte, $nama_akte);

        $a = new Panti;
        $a->nama = $r->nama;
        $a->pemilik = $r->pemilik;
        $a->tipe = $r->tipe;
        $a->jenis = $r->jenis;
        $a->foto = $nama_foto;
        $a->alamat = $r->alamat;
        $a->deskripsi = $r->deskripsi;
        $a->kebutuhan = $r->kebutuhan;
        $a->t_pria = $r->t_pria;
        $a->t_wanita = $r->t_wanita;
        $a->akte = $nama_akte;
        $a->program = $r->program;
        $a->jml_pgrs = $r->jml_pgrs;
        $a->save();

        return redirect('/admin/panti');
    }

    public function editPanti($id){
        $title = $this->title;
        $p = Panti::where('id',$id)->first();
        return view('page.admin.panti_edit')->with(compact('title','p'));
    }

    public function editPantiSubmit(Request $r){
        $a = Panti::find($r->id);
        $a->nama = $r->nama;
        $a->pemilik = $r->pemilik;
        $a->tipe = $r->tipe;
        $a->jenis = $r->jenis;
        if ($r->filled('foto')) {
            $foto = $r->file('foto');
            $nama_foto = "foto_".Carbon::now()->timestamp."_".$foto->getClientOriginalName();
            $tujuan_foto = 'assets/images/panti/';
            $foto->move($tujuan_foto, $nama_foto);
            $a->foto = $nama_foto;
        }
        $a->alamat = $r->alamat;
        $a->deskripsi = $r->deskripsi;
        $a->kebutuhan = $r->kebutuhan;
        $a->t_pria = $r->t_pria;
        $a->t_wanita = $r->t_wanita;

        if ($r->filled('akte')){
            $akte = $r->file('akte');
            $nama_akte = "akte_".Carbon::now()->timestamp."_".$akte->getClientOriginalName();
            $tujuan_akte = 'assets/images/akte/';
            $akte->move($tujuan_akte, $nama_akte);
            $a->akte = $nama_akte;
        }
        $a->program = $r->program;
        $a->jml_pgrs = $r->jml_pgrs;
        $a->save();

        return redirect('/admin/panti');
    }
}
