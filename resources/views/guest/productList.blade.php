<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Logo Website -->
        <link rel="icon" href="assets/logo-svg.svg">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

        <!-- Framework Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <!-- Framework Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="asset-style/custom.css">
        <link rel="stylesheet" href="asset-style/font-size.css">
    </head>
    <body>
        @include('guest-layout.navbar')
        <div class="container container-fluid">

            {{-- Title --}}
            <div class="text-center mt-3 mb-3">
                <h1>Produk Hasil Gerakan</h1>
            </div>
    
            {{-- List Container --}}
            <div class="row mx-auto align-items-center justify-content-center">

                @foreach ($produk as $item)
                <div class="col-6 col-md-4 col-lg-2 g-3 m-3">
                    <a href="{{ route('product.detail',$item->id) }}" class="text-decoration-none">
                        <div class="card" style="width: 12rem; background: rgba(160, 214, 180, 0.4); border-radius: 10px;">
                            <img src="https://i.pinimg.com/736x/90/f9/9f/90f99fd6f7b742201a466635410450a9.jpg" alt="product-header" >
                            <div class="card-body list-card-body">
                                <p class="card-title list-card-title text-black" >{{ $item->nama }}</p>
                                <p class="card-description text-black">{{ $item->ringkasan }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>  
    </body>
</html>


