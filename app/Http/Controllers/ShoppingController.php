<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function listProduk()
    {
        $data['title'] = "laracms | produk";
        $data['cart'] = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM nota");
        $data['produk'] = DB::select("SELECT p.id , p.nama , p.thumbnail, p.harga , p.stok , k.nama AS kategori FROM produk AS p
                                      INNER JOIN kategori AS k ON k.id = p.kategori_id");
                          return view('list-produk',$data);
    }

    public function cart(Request $request)
    {
        $nota= DB::selectOne("SELECT * FROM nota WHERE status_transaksi='pending'",[]);
                if($nota != null){
                    echo "Nota Exist";
                    echo "Produk ID = " .$request->get('produkId');

                }else{
                    echo "Nota Not Exist";
                    DB::insert("INSERT INTO nota(total,ppn,tagihan,jenis_faktur,status_transaksi) VALUES (0.00,10.00,0.00,'penjualan','pending')",[]);
                    return redirect('/shopping/cart');
                }

                $data['title']="laracms | cart";
                $data['nota']=$nota;
                $data['tanggal']=date('d-m-Y H:i:s');
                        return view('nota',$data);
    }

    public function checkout($notaId)
    {
        DB::update("UPDATE nota SET status_transaksi='succes' WHERE ID=?",[$notaId]);
        return redirect('/shopping');
    }
}
