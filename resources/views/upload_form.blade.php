<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{url('/assets/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/library/dropzone-5.7.0/dropzone.min.css')}}">

</head>
<body>
    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="col-md-12">
                    <h4>FORM UPLOAD PRODUK</h4>
                    <br>
                    <hr>


                    <form action="{{url('/upload/action')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label class="font-weight-bold">Foto Produk</label><br>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi Produk</label><br>
                            <textarea rows="5" name="deskripsi" class="form-control" placeholder="Tulis Deskripsi"></textarea><br>
                        </div>

                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <br>
                    <hr>
                    <br>



                </div>



                <div class="container mt-5">
                    <div class="row">
                        @foreach($produk as $p)
                            <div class="col-md-12">
                                <div class="row align-items-center" style="min-height: 50px;">
                                    <div class="col-md-8">
                                        <img src="{{url($p->foto)}}" height="50">
                                        <p class="m-0">{{$p->deskripsi}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-info" href="{{url('/detail/action/'.$p->id)}}"><i class="fa fa-pencil-alt"></i> Detail</a>
                                        <a class="btn btn-warning" href="{{url('/update/action/'.$p->id)}}"><i class="fa fa-pencil-alt"></i> Edit</a>
                                        <a class="btn btn-danger" href="{{url('/delete/'.$p->id)}}"><i class="fa fa-trash"></i> Delete</a>
                                    </div>
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
<script src="{{url('/assets/library/dropzone-5.7.0/dropzone.min.js')}}"></script>

</body>
</html>
