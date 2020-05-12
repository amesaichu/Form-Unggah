<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>

    <!--## CSS ##-->
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome-free-5.13.0/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome-free-5.13.0/css/solid.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">

</head>
<body>


    <!--## HEADER ##-->
    <header>
        <nav id="nav-menu" class= "navbar navbar-expand-md navbar-light bg-light position-static navbar-company">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <h2>LARACMS</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <section id="navbar-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shopping/cart')}}">
                                <span class="badge badge-danger" style="postion: absolute; margin-left: -15px; margin-top= -15px;">{{$cart->jumlah_keranjang}}</span>
                                <i class="fa fa-shopping-cart"></i>

                            </a>
                        </li>
                    </ul>

                </section>
            </div>
        </nav>
    </header>


    <!--## CONTENT ##-->
    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen">

                <div class="col-md-12">
                    <h4>KATALOG PRODUK</h4>
                </div>

                @foreach($produk as $p)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="{{url($p->thumbnail)}}" height="100">
                                <h4 class="card-title">{{$p->nama}}</h4>
                                <h5>Rp {{$p->harga}}</h5>
                                <h6>Stok <span class="badge btn-warning">{{$p->stok}}</span></h6>
                                <a href="{{url('/shopping/cart?produkId' . $p->id)}}" class="btn btn-success">Beli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</body>
</html>
