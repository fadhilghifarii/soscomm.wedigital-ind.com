<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    private $title = "Donatur";

    public function index(){
        $title = $this->title;
        $user = User::where('role','donatur')->get();
        $no=1;

        return view('page.admin.donatur')->with(compact('title','user','no'));
    }
}
