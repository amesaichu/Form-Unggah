<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{url('/assets/style.css')}}">

</head>
<body>

<h4>
From Upload Produk</h4>

<a class="btn btn-warning" href="{{url('/upload/form')}}"></i>Tambah Data</a>

<section class="bg-color-0">
    <div class="container">
    <br>
                <br>
                <hr>
        <div class="container mt-12">
                        <div class="row">
                            @foreach($produk as $p)


                            <div class="col-md-12">
                                <div class="row align-items-center" style="min-height: 50px;">

                                    <div class="col-md-1"><h4>{{$p->id}}</h4></div>
                                    <div class="col-md-11">
                                        <img src="{{url($p->foto)}}" height="50">
                                        <p class="m-0">{{$p->deskripsi}}</p>


                                    </div>
                                </div>
                            </div>
                            <br>
                                        <hr>
                            @endforeach
            </div>
</div>
</div>
<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.3.1/js/bootstrap.js')}}"></script>


</body>
</html>
