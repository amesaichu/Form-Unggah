<!DOCTYPE html>
<html>
<head>
    <title>Reporting</title>
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>

<body>


<section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">

                <div class="container">
                <div class="row">
                <div class="col-md-12 mb-3">

                <div class="col-md-12 mt-3 text-center">
                    <h4>Daftar Produk</h4>
                    <a class="btn btn-success" href="{{url('/reporting/preview')}}" target="_blank">Preview Laporan</a>
                    <a class="btn btn-warning" href="{{url('/reporting/print')}}" target="_blank">Cetak Laporan</a>
                </div>
                </div>
                @foreach($produk as $p)
                <div class="col-md-12">
                <div class="row align-items-center mb-3 p-3" style="min-height: 50px;border:1px solid #2E3D54;">
                                <div class="col-md-1"><h4>{{$p->id}}</h4></div>
                                <div class="col-md-2"><img src="{{$p->foto}}" height="100"></div>
                                <div class="col-md-3"><h4 class="m-0">{{$p->nama}}</h4></div>
                                <div class="col-md-3"><h4 class="m-0">Rp {{$p->harga}},00</h4></div>
                                <div class="col-md-3"><h4 class="m-0">Stok {{$p->stok}}</h4></div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
    </div>
    </section>



<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.3.1/js/bootstrap.js')}}"></script>

</body>
</html>
