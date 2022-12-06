@extends('admin-layout.form-layout')
@section('status-icon-prod')
    active
@endsection
@section('content')
    <!-- Content Header -->
    <section class="mt-3 mb-4">
        <!-- <h1 class="display-text fw-bold mb-2">Edit Product</h1> -->
        <h1 class="display-text fw-bold mb-2">Ubah Produk</h1>
        <p class="h2-text mt-2">Wow, memperbaharui beberapa produk cantik, eh?</h2>
        <!-- <p class="h2-text mt-2">Updating some beautiful product, eh?</h2> -->
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('product.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="{{ $produk->nama }}">
            </div>
            <div class="mb-3">
                <label for="ringkasan" class="form-label fw-semibold">Ringkasan</label>
                <input type="text" class="form-control" id="ringkasan" name="ringkasan" placeholder="Ringkasan Produk" value="{{ $produk->ringkasan }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                <input id="deskripsi" name="deskripsi" type="hidden" name="content" value="{{ $produk->deskripsi }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="uploaded_at" class="form-label fw-semibold">Tanggal</label>
                <input type="date" class="form-control" id="uploaded_at" name="uploaded_at" value="{{ $produk->uploaded_at }}">
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