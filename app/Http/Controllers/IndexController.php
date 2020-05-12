<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function list()
    {
        $data['title'] = "Dashboard - laracms";
        $data['produk'] = DB::select("SELECT *FROM t_produk");
        return view('index',$data);
    }
}
