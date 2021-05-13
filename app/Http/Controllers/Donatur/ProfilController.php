<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $title = Auth::user()->name;

        $u = User::where('id', Auth::user()->id)->get()[0];
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->orderBy('status', 'asc')->get();
        $c_transaksi = Transaksi::where('user_id', Auth::user()->id)->count();
        return view('page.donatur.profile')->with(compact('u', 'transaksi', 'c_transaksi', 'title'));
    }

    public function ubahProfil(Request $r)
    {
        $a = User::find($r->id);
        $a->name = $r->name;
        $a->email = $r->email;
        if ($r->hp != "") {
            $a->hp = $r->hp;
        }
        $a->save();

        return redirect()->back();
    }

    public function donasiDelete($id)
    {
        Transaksi::where([['id', $id], ['user_id', Auth::user()->id]])->delete();

        return redirect()->back();
    }
}
