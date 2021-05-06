<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $title = "Article";
    public function index()
    {
        $title = $this->title;

        $article = Article::orderBy('created_at', 'desc')->get();
        return view('page.admin.article')->with(compact('title', 'article'));
    }

    public function addArticle()
    {
        $title = $this->title;
        return view('page.admin.article_add')->with(compact('title'));
    }

    public function addArticleSubmit(Request $r)
    {

        $a = new Article;
        $a->judul = $r->judul;
        $foto = $r->file('foto');
        $nama_foto = "foto_" . Carbon::now()->timestamp . "_" . $foto->getClientOriginalName();
        $tujuan_foto = 'assets/images/article/';
        $foto->move($tujuan_foto, $nama_foto);

        $a->foto = $nama_foto;

        $a->deskripsi = $r->deskripsi;
        $a->save();

        return redirect('/admin/article');
    }

    public function editArticle($id)
    {
        $title = $this->title;
        $a = Article::where('id', $id)->first();
        return view('page.admin.article_edit')->with(compact('title', 'a'));
    }

    public function editArticleSubmit(Request $r)
    {
        $a = Article::find($r->id);
        $a->judul = $r->judul;
        if ($r->exists('foto')) {
            $foto = $r->file('foto');
            $nama_foto = "foto_" . Carbon::now()->timestamp . "_" . $foto->getClientOriginalName();
            $tujuan_foto = 'assets/images/article/';
            $foto->move($tujuan_foto, $nama_foto);
            $a->foto = $nama_foto;
        }
        $a->deskripsi = $r->deskripsi;
        $a->save();

        return redirect('/admin/article');
    }
}
