<<<<<<< HEAD
@extends('admin-layout.form-layout')
@section('status-icon-prod')
    active
@endsection
@section('content')
    <!-- Content Header -->
    <section class="mt-3 mb-4">
        <h1 class="display-text fw-bold mb-2">Tambah Produk</h1>
        <!-- <h1 class="display-text fw-bold mb-2">Add Product</h1> -->
        <p class="h2-text mt-2">Tebak, itu merupakan sesuatu yang luar biasa, bukan?</h2>
        <!-- <p class="h2-text mt-2">Guess it's something amazing isn't it?</h2> -->
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
            </div>
            <div class="mb-3">
                <label for="ringkasan" class="form-label fw-semibold">Ringkasan</label>
                <input type="text" class="form-control" id="ringkasan" name="ringkasan" placeholder="Ringkasan Produk">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                <input id="deskripsi" name="deskripsi" type="hidden" name="content">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="uploaded_at" class="form-label fw-semibold">Tanggal</label>
                <input type="date" class="form-control" id="uploaded_at" name="uploaded_at">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                <div class="file-upload" >
                    <div class="image-upload-wrap">
                        <input class="file-upload-input form-control" type='file' name="gambar" id="gambar" onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                            <h3><i class="bi bi-plus-square-dotted"></i></h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="d-grid">
                            <button type="button" onclick="removeUpload()" class="btn btn-danger mt-3">Hapus Gambar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
    
@endsection
=======
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Hello World!</h1>
    </body>
</html>
>>>>>>> 0e4dcf3b16627876d8c5bdf682bf194f1428d660
