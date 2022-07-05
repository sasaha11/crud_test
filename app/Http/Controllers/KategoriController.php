<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){

    	$kategori = DB::table('tabel_kategori')->get();
    	return view('lihatkategori',['kategori' => $kategori]);
    }

	public function tambah(){
    	return view('tambahkategori');
	}

    public function buat(Request $request)
    {
        DB::table('tabel_kategori')->insertGetId(
            [            
            'kategori' => $request->kategori_k
            ]
        );

        return redirect('/kategori');
     
    }

    public function edit($id){
    	$kategori = DB::table('tabel_kategori')->where('id', $id)->get();
    	return view('editkategori',['kategori' => $kategori]);
    }

    public function update(Request $request){

        DB::table('tabel_kategori')->where('id',$request->id_k)->update([
            'kategori' => $request->kategori_k
        ]);

        return redirect('/kategori');
    }
    public function delete($id){
        DB::table('tabel_kategori')->where('id', $id)->delete();
        return redirect('/kategori');
    }
}

?>