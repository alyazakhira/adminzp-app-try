<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Judul Website -->
        <title>Zero Plastic</title>

        <!-- Logo Website -->
        <link rel="icon" href="asset-img/logo-svg.svg">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

        <!-- Framework Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <!-- Framework Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="asset-style/font-size.css">
        <link rel="stylesheet" href="asset-style/view-style.css">

        <!-- Jquery and Plugin JavaScript -->
        @include('search-query')
    </head>

    <body id="context">
        
        @include('guest-layout.navbar')
        <div class="container mt-5">
            <h1 class="display-text fw-bold mb-4">Daftar Artikel</h1>
            @if(count($article))
            <div class="alert alert-success">
                Yeay, kata <strong>{{$key}}</strong> yang Anda cari ditemukan!
            </div>
            <div class="card border-0">
                <div class="scrollable-h">
                    <table class="table table-hover text-center">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Ringkasan</th>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($article as $row)
                            <tr>
                                <td>{{ $no_article++ }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->ringkasan }}</td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('article.detail', $row->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <section class="mb-4">
                    <div class="baris$baris">
                        {{ $article->links() }}
                    </div>
                </section>
            </div>
            @else
            <div class="alert alert-warning">
                Wah, sayang sekali kata {{$key}} tidak ditemukan
            </div>
            @endif
            <!-- Table -->
            
            <center><hr class="mb-3 mt-3 border-3"></center>
            <h1 class="display-text fw-bold mb-4">Daftar Produk</h1>
            @if(count($product))
            <div class="alert alert-success">
                Yeay, kata <strong>{{$key}}</strong> yang Anda cari ditemukan!
            </div>
            <div class="card border-0">
                <div class="scrollable-h">
                    <table class="table table-hover text-center">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Ringkasan</th>
                                <th >Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($product as $baris)
                            <tr>
                                <td>{{ $no_product++ }}</th>
                                <td>{{ $baris->nama }}</td>
                                <td>{{ $baris->ringkasan }}</td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('product.detail', $baris->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <section class="mb-4">
                    <div class="baris$baris">
                        {{ $product->links() }}
                    </div>
                </section>
            </div>
            @else
            <div class="alert alert-warning">
                Wah, sayang sekali kata {{$key}} tidak ditemukan
            </div>
            @endif
            
        </div>
        
    </body>
</html>
