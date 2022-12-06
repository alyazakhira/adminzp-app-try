@extends('admin-layout.form-layout')
@section('status-icon-article')
    active
@endsection
@section('content')
    <!-- Content Header -->
    <section class="mt-3 mb-4">
        <h1 class="display-text fw-bold mb-2">Form Artikel</h1>
        <p class="h2-text mt-2">Apakah ada yang salah?</h2>
        <!-- <p class="h2-text mt-2">Is there something wrong?</h2> -->
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('article.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label fw-semibold">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel" value="{{ $artikel->judul }}">
            </div>
            <div class="mb-3">
                <label for="ringkasan" class="form-label fw-semibold">Ringkasan</label>
                <input type="text" class="form-control" id="ringkasan" name="ringkasan" placeholder="Ringkasan Isi" value="{{ $artikel->ringkasan }}">
            </div>
            <div class="mb-3">
                <label for="artikel" class="form-label fw-semibold">Artikel</label>
                <input id="artikel" name="artikel" type="hidden" name="content" value="{{ $artikel->artikel }}">
                <trix-editor input="artikel"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                <input type="date" class="form-control" id="uploaded_at" name="uploaded_at" value="{{ $artikel->uploaded_at }}">
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
                        <img class="file-upload-image" src="{{ asset('asset-article/'. $artikel->gambar) }}" alt="your image" />
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