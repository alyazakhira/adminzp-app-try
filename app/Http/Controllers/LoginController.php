<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }

    public function index(){
        $artikel = Article::orderBy('id','desc')->take(3)->get();
        $produk = Product::orderBy('id','desc')->take(3)->get();
        $jumlah_artikel = Article::count();
        $jumlah_produk = Product::count();
        return view('admin.dashboard',compact('artikel','produk','jumlah_artikel','jumlah_produk'));
    }
    
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    public function logout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
