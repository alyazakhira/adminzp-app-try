
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
        <form class="d-flex" role="search">
            <input class="form-control me-2 search" type="text" placeholder="Search" aria-label="Search" id="input-search">
            <button class="btn btn-outline-light" type="button">Search</button>
        </form>
        </div>
    </div>
</nav>

