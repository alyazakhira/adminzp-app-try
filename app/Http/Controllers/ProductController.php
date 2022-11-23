<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Image;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Product::orderBy('id')->paginate(5);
        $no = 5 * ($produk->currentPage()-1);
        return view('admin.product.index',compact('produk','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $produk = new Product;
        $produk->nama = $request->nama;
        $produk->ringkasan = $request->ringkasan;
        $produk->deskripsi = $request->deskripsi;
        $produk->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-product/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $produk->gambar = $namaFile;
        $produk->save();
        return redirect('/product/index')->with('pesan','Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Product::find($id);
        return view('admin.product.show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Product::find($id);
        return view('admin.product.edit',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $produk = Product::find($id);
        $produk->nama = $request->nama;
        $produk->ringkasan = $request->ringkasan;
        $produk->deskripsi = $request->deskripsi;
        $produk->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-product/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $produk->gambar = $namaFile;
        $produk->save();
        return redirect('/product/index')->with('pesan','Data Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Product::find($id);
        $produk->delete();
        return redirect('/product/index')->with('pesan','Produk berhasil dihapus');
    }
}
