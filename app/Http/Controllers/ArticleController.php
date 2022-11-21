<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Image;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Article::orderBy('id')->paginate(5);
        $no = 5 * ($artikel->currentPage()-1);
        return view('admin.article.index',compact('artikel','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $artikel = new Article;
        $artikel->judul = $request->judul;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect('/article/index')->with('pesan','Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Article::find($id);
        return view('admin.article.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Article::find($id);
        return view('admin.article.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, $id)
    {
        $artikel = Article::find($id);
        $artikel->judul = $request->judul;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect('/article/index')->with('pesan','Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Article::find($id);
        $artikel->delete();
        return redirect('/article/index')->with('pesan','Artikel berhasil dihapus');
    }
}
