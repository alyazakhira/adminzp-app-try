
{{-- Navbar --}}
<nav class="navbar navbar-expand-md navbar-dark sticky-top top-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="asset-img/logo-text-white-svg.svg" alt="Logo" width="100" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="/#berlangganan">Berlangganan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/#tentangKami">Tentang Kami</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Info Lain</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('product.list') }}">Produk</a></li>
                    <li><a class="dropdown-item" href="{{ route('article.list') }}">Artikel Terkait</a></li>
                </ul>
            </li>
        </ul>
        <div class="w-40">
            <form class="input-group d-flex" role="search" action="{{route('user.search')}}" method="GET">
                <input type="text" name="keyword" class="form-control search" placeholder="Search" type="search" aria-label="search" aria-describedby="button-addon2">
                <button class="btn btn-outline-zp" type="submit" id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
        </div>
    </div>
</nav>

