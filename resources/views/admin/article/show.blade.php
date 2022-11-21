@extends('admin-layout.index-layout')

@section('status-icon-article')
    active
@endsection

@section('content')
<article>
    <div>
        <img src="{{ asset('asset-article/'. $artikel->gambar) }}" class="mx-auto">
        <h1 class="h1-text text-center fw-bold mt-2 mb-3">{{ $artikel->judul }}</h1>
        <p class="mt-4"><strong>Diunggah pada:</strong> {{ $artikel->uploaded_at }}</p>
        <div>{!! $artikel->artikel !!}</div>
    </div>
</article>

@endsection