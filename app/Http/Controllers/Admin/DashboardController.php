<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminRekening;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{

    public function __construct()
    {
        // $this->authorize('isAdmin');
    }

    public function index()
    {
        $title = "Dashboard";
        return view('page.admin.dashboard')->with(compact('title'));
    }

    public function inputRek()
    {
        $title = "inputrek";
        $rekening = AdminRekening::get();
        return view('page.admin.dashboard_input_norek')->with(compact('title', 'rekening'));
    }

    public function inputRekSubmit(Request $r)
    {
        $title = "inputrek";

        $a = AdminRekening::find(1);
        if ($r->exists('foto1')) {
            $foto1 = $r->file('foto1');
            $nama_foto1 = "foto1_" . Carbon::now()->timestamp . "_" . $foto1->getClientOriginalName();
            $tujuan_foto1 = 'assets/images/rek_admin/';
            $foto1->move($tujuan_foto1, $nama_foto1);
            $a->foto = $nama_foto1;
        }
        $a->bank = $r->bank1;
        $a->nama = $r->nama1;
        $a->norek = $r->norek1;
        $a->save();

        $b = AdminRekening::find(2);
        if ($r->exists('foto2')) {
            $foto2 = $r->file('foto2');
            $nama_foto2 = "foto2_" . Carbon::now()->timestamp . "_" . $foto2->getClientOriginalName();
            $tujuan_foto2 = 'assets/images/rek_admin/';
            $foto2->move($tujuan_foto2, $nama_foto2);
            $b->foto = $nama_foto2;
        }
        $b->bank = $r->bank2;
        $b->nama = $r->nama2;
        $b->norek = $r->norek2;
        $b->save();

        $c = AdminRekening::find(3);
        if ($r->exists('foto3')) {
            $foto3 = $r->file('foto3');
            $nama_foto3 = "foto3_" . Carbon::now()->timestamp . "_" . $foto3->getClientOriginalName();
            $tujuan_foto3 = 'assets/images/rek_admin/';
            $foto3->move($tujuan_foto3, $nama_foto3);
            $c->foto = $nama_foto3;
        }
        $c->bank = $r->bank3;
        $c->nama = $r->nama3;
        $c->norek = $r->norek3;
        $c->save();

        return redirect()->back();
    }
}
