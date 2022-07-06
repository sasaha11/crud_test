<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Kategori;

class ProductController extends Controller
{
    public function index(){

        //$produk = DB::table('tabel_produk')
        //->join('tabel_kategori', 'tabel_produk.id', '=', 'tabel_kategori.id')
        //->select('tabel_produk.*', 'tabel_kategori.*')
        //->get(); 
    	//$produk = DB::table('tabel_produk')->get();
        //$produk = Produk::join('tabel_kategori', 'tabel_kategori.id', '=', 'tabel_produk.kategori_id')
        //->select('tabel_produk.*', 'tabel_kategori.kategori')
        //->get();
        $produk = Produk::getProduk();
    	return view('lihatproduk',['produk' => $produk]);
    }
	public function tambah(){
        //$kategori = DB::table('tabel_kategori')->get();
        $kategori = Kategori::all();
    	return view('tambahproduk',['kategori' => $kategori]);
	}

    public function buat(Request $request)
    {
        //$id = DB::table('tabel_produk')->insertGetId(
        //  [            
          //      'produk' => $request->produk_p,
            //'kategori_id' => $request->kategori_p,
            //'stok' => $request->stok_p
            //]
        //);
        Produk::create([
            'produk' => $request->produk_p,
            'kategori_id' => $request->kategori_p,
            'stok' => $request->stok_p,
        ]);
        return redirect('/produk')->with('status', 'Data Berhasil Ditambah');
     
    }

    public function edit($id,$kategori_id){
        $produk = Produk::getIdProduk($id); 
        $kategori = Kategori::where('id', 'not like', $kategori_id)->get();
    	return view('editproduk',['produk' => $produk], ['kategori' => $kategori]);
    }

    public function update(Request $request){

        Produk::where('id',$request->id_p)->update([
            'produk' => $request->produk_p,
            'kategori_id' => $request->kategori_p,
            'stok' => $request->stok_p
        ]);

        return redirect('/produk');
    }
    public function delete($id){
        //DB::table('tabel_produk')->where('id', $id)->delete();
        Produk::deleted($id);
        return redirect('/produk');
    }
}
