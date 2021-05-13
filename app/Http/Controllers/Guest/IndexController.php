<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\PermintaanDonasi;
use App\Models\AdminRekening;
use App\Models\Article;
use App\Models\Panti;
use App\Models\Program;
use App\Models\Slider;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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

    public function donasi($id_program)
    {
        $title = "Donasi";
        $rekening = AdminRekening::get();
        return view('page.donasi')->with(compact('title', 'id_program', 'rekening'));
    }

    public function donasiProses(Request $r)
    {
        $bank = AdminRekening::where('foto', '!=', null)
            ->orWhere('nama', '!=', null)
            ->orWhere('norek', '!=', null)
            ->get();

        if (Gate::allows('isDonatur')) {

            $a = new Transaksi;
            $a->user_id = Auth::user()->id;
            $a->program_id = $r->id_p;
            $a->jumlah = $r->jumlah;
            $a->save();

            $details = [
                'nama' => Auth::user()->name,
                'email' => Auth::user()->email,
                'hp' => Auth::user()->hp,
                'jumlah' => $r->jumlah,
                'bank' => $bank,
            ];

            Mail::to(Auth::user()->email)->send(new PermintaanDonasi($details));

            return redirect()->back()->with('berhasil', Auth::user()->email);
        }

        $details = [
            'nama' => $r->name,
            'email' => $r->email,
            'hp' => $r->hp,
            'jumlah' => $r->jumlah,
            'bank' => $bank,
        ];
        Mail::to($r->email)->send(new PermintaanDonasi($details));

        return redirect()->back()->with('berhasil', $r->email);
    }

    public function article()
    {
        $title = "Semua Panti Asuhan";

        $article = Article::orderBy('id', 'desc')->get();

        return view('page.article')->with(compact('title', 'article'));
    }

    public function articleSearch(Request $r)
    {
        $title = "Search Article";

        $article = Article::where('judul', 'like', '%' . $r->judul . '%')->get();

        return view('page.article')->with(compact('title', 'article'));
    }

    public function detailArticle($id)
    {
        $title = "Detail Article";

        $a = Article::where('id', $id)->get()[0];

        return view('page.article_detail')->with(compact('title', 'a'));
    }
}
