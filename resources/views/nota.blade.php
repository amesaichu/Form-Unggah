<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.3.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome-free-5.13.0/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome-free-5.13.0/css/solid.css')}}">

</head>
<body>


<section class="bg-color-0">
    <div class="container">
        <div class="row align-items-center half-screen space">
            <div class="container">

                <div class="row mb-4">
                    <div class="col-md-6">
                        <h4 class="mb-3 text-capitalize">Nota {{$nota->jenis_faktur}}</h4>
                        <table>
                            <tr>
                                <th>Nomor</th>
                                <td>{{$nota->id}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{$tanggal}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 text-right">
                        <!-- <img src="{{url('/assets/image/logo.png')}}" width="100"> -->
                    </div>
                </div>

                <hr class="m-0">

                <div class="row mt-4">
                    <div class="col-md-12">

                        <table style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Orea</td>
                                    <td>Rp 5.000,00</td>
                                    <td class="text-center">
                                        <div class="container">
                                            <input type="button" onclick="decrementValue()" value="-" />
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
                                            <input type="button" onclick="incrementValue()" value="+" />
                                        </div>
                                    </td>
                                    <td class="text-right">Rp 10.000,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right pr-2" style="background: #efefef;">Sub Total</td>
                                    <td class="text-right" style="...">Rp 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right pr-2">PPN 10%</td>
                                    <td class="text-right">Rp 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right pr-2">Total Tagihan</td>
                                    <td class="text-right">Rp 0.00</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <p>Pembayaran jatuh tempo dalam 30 hari sejak tanggal faktur</p>
                        <a class="btn btn-warning float-right mr-3" href="{{url('/invoice/print')}}" target="_blank">Checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

</body>

<script type="text/javascript">
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>

</html>
