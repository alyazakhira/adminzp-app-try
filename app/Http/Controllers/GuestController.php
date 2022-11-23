<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Product;

class GuestController extends Controller
{
    public function index(){
        $artikel = DB::table('articles')->skip(Article::count()-3)->take(3)->get();
        $artikelcl = DB::table('articles')->skip(Article::count()-6)->take(3)->get();
        $artikelActive = DB::table('articles')->skip(Article::count()-1)->take(1)->get();
        $artikelActivecl = DB::table('articles')->skip(Article::count()-6)->take(5)->get();
        return view('guest.index',compact('artikel','artikelcl','artikelActive','artikelActivecl'));
    }

    public function listArticle(){
        $artikel = Article::orderBy('id') -> paginate(5);
        return view('guest.articleList',compact('artikel'));
    }

    public function listProduct(){
        $produk = Product::orderBy('id') -> paginate(5);
        return view('guest.productList',compact('produk'));
    }

    public function detailArticle($id){
        $artikel = Article::find($id);
        return view('guest.articleDetail',compact('artikel'));
    }

    public function detailProduct($id){
        $produk = Product::find($id);
        return view('guest.productDetail',compact('produk'));
    }
}
