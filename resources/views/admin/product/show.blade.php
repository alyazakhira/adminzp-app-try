@extends('admin-layout.index-layout')

@section('status-icon-prod')
    active
@endsection

@section('content')
<article>
    <img src="{{ asset('asset-product/'. $produk->gambar) }}" class="mx-auto">
    <h1 class="h1-text text-center fw-bold mt-2 mb-3">{{ $produk->nama }}</h1>
    <p class="mt-4"><strong>Diunggah pada:</strong> {{ $produk->uploaded_at }}</p>
    <div>{!! $produk->deskripsi !!}</div>
</article>

@endsection