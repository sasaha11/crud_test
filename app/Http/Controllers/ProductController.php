<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){

        //$produk = DB::table('tabel_produk')
        //->join('tabel_kategori', 'tabel_produk.id', '=', 'tabel_kategori.id')
        //->select('tabel_produk.*', 'tabel_kategori.*')
        //->get(); 
    	$produk = DB::table('tabel_produk')->get();
    	return view('lihatproduk',['produk' => $produk]);
    }
	public function tambah(){
        $kategori = DB::table('tabel_kategori')->get();
    	return view('tambahproduk',['kategori' => $kategori]);
	}

    public function buat(Request $request)
    {
        $id = DB::table('tabel_produk')->insertGetId(
            [            
                'produk' => $request->produk_p,
            'kategori_id' => $request->kategori_p,
            'stok' => $request->stok_p
            ]
        );

        return redirect('/produk');
     
    }

    public function edit($id){
    	$produk = DB::table('tabel_produk')->where('id', $id)->get();
        $kategori = DB::table('tabel_kategori')->get();
    	return view('editproduk',['produk' => $produk, 'kategori' => $kategori]);
    }

    public function update(Request $request){

        DB::table('tabel_produk')->where('id',$request->id_p)->update([
            'produk' => $request->produk_p,
            'kategori_id' => $request->kategori_p,
            'stok' => $request->stok_p
        ]);

        return redirect('/produk');
    }
    public function delete($id){
        DB::table('tabel_produk')->where('id', $id)->delete();
        return redirect('/produk');
    }
}
