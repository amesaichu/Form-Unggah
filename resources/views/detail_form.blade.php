<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{url('/assets/style.css')}}">

</head>
<body>
    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="col-md-12">
                    <h4>DETAIL PRODUK</h4>
                    <br>
                    <hr>
                    <form action="{{url('/upload/form')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$blog->id}}" class="form-control" placeholder="ID">

                        <div class="form-group">
                            <label class="font-weight-bold">Foto Produk</label><br>
                            <img src="{{url($blog->foto)}}" height="250px"><br>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi Produk</label><br>
                            <h2>{{$blog->deskripsi}}</h2>
                        </div>

                        <input type="submit" value="Back" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>


<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.3.1/js/bootstrap.js')}}"></script>





</body>
</html>
