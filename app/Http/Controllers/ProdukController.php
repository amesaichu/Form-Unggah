<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller{
        public function uploadForm(){
            $data['title'] = "Dashboard - laracms";
            $data['produk'] = DB::select("SELECT * FROM t_produk");
                                return view('upload_form', $data);
        }

        public function uploadAction(Request $request){
            $method = $request->method();
            if($method == "POST"){
                $directory = 'assets/produk';
                $file = $request->file('file');
                        $file->move($directory, $file->getClientOriginalName());

                        DB::insert("INSERT INTO t_produk (foto, deskripsi) VALUES (?, ?)",[
                            $directory."/".$file->getClientOriginalName(),
                            $request->input('deskripsi')
                        ]);
                return redirect('/upload/form');

            }else{
                return redirect('/upload/form');
            }
        }




        public function multipleUploadForm(){
            $data['title'] = "Dashboard - laracms";
            $data['produk'] = DB::select("SELECT * FROM t_produk");
                                return view('multipleuploud_form', $data);
        }

        public function multipleUploadAction(Request $request){
            $method = $request->method();
            if($method == "POST"){
                $directory = 'assets/produk';
                $file = $request->file('file');
                        $file->move($directory, $file->getClientOriginalName());

                        DB::insert("INSERT INTO t_produk (foto, deskripsi) VALUES (?, ?)",[
                            $directory."/".$file->getClientOriginalName(),
                            $request->input('deskripsi')
                        ]);
                return redirect('/multiple-upload/form');

            }else{
                return redirect('/multiple-upload/form');
            }
        }



        public function updateForm($id){
            $data['blog'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?", [$id]);
            return view('edit_form', $data);
        }

        public function updateAction(Request $request){
            $method = $request->method();
            if($method == "POST"){
                $directory = 'assets/produk';
                $file = $request->file('file');
                        $file->move($directory, $file->getClientOriginalName());

                        DB::update("UPDATE t_produk SET foto=?, deskripsi=? WHERE id=?",[
                            $directory."/".$file->getClientOriginalName(),
                            $request->input('deskripsi'),
                            $request->input('id')
                        ]);
                return redirect('/upload/form');

            }else{
                return redirect('/upload/form');
            }
        }

        public function detailForm($id){
            $data['blog'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?", [$id]);
            return view('detail_form', $data);
        }

        public function delete($id){
            DB::delete("DELETE FROM t_produk WHERE id=?", [$id]);
            return redirect('/upload/form');
        }

    }
?>
