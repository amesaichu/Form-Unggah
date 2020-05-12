$(document).ready(function() {


    $('#search-product').keydown(function(e) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:"http//localhost:8000/shopping/api/search-product",
            type:"POST",
            data: {
                'keyword' :$(this).val()
            },
            succes:function(response) {
                console.log(response);

                $theme="";

                $.each(response, function(key,val) {
                    $theme += "<div class='col-md-3'>" +
                                "<div class='card'>" +
                                    "<div class='card-body text-center'>" +
                                        "<span class='badge badge-danger' style='position: absolute; border: 2px solid #ffffff; margin-left: -20px;'>" + val.kategori + "</span>" +
                                        "<img src='"+val.thumbnail + "' height='100'>" +
                                        "<h4 class='card-title'>" + val.nama + "</h4>" +
                                        "<h5>Rp " + val.harga + "</h5>" +
                                        "<h6>Stok <span class='badge badge-warning'>" + val.stok + "</span></h6>" +
                                        "<a href='/shopping/cart?productId=" +val.id+ "' class='btn btn-succes'>Beli</a>" +
                                    "</div>" +
                                "</div>" +
                            "</div>"

            });

            $('#list-product').html(
                $theme
            );
        }
    });

});

});
