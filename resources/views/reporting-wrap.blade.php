<!DOCTYPE html>
<html>
<head><title>{{$title}}</title></head>
<body>

<table class="table" style="widht:100%; border:1px solid red;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>

    <tbody>
    @foreach($produk as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nama}}</td>
            <td>Rp {{$p->harga}},00</td>
            <td>{{$p->stok}}</td>
        </tr>

    @endforeach
    </tbody>

</table>

</body>
</html>
