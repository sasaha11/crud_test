<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){

    	//$kategori = DB::table('tabel_kategori')->get();
        //$kategori = Kategori::all();
        $kategori = Kategori::getKategori();
    	return view('lihatkategori',['kategori' => $kategori]);
    }

	public function tambah(){
    	return view('tambahkategori');
	}

    public function buat(Request $request)
    {
        //DB::table('tabel_kategori')->insertGetId(
           // [            
          //  'kategori' => $request->kategori_k
         //   ]
        //);

        //Kategori::create([
          //  'kategori' => $request->kategori_k,
        //]);
        Kategori::create()->insertGetId(
            [            
            'kategori' => $request->kategori_k
            ]);
        return redirect('/kategori');
     
    }

    public function edit($id){
    	//$kategori = DB::table('tabel_kategori')->where('id', $id)->get();
        //$kategori= Kategori::where('id', $id)->get();
        $kategori = Kategori::getById($id);
    	return view('editkategori',['kategori' => $kategori]);
    }

    public function update(Request $request){

        //DB::table('tabel_kategori')->where('id',$request->id_k)->update([
          //  'kategori' => $request->kategori_k
       // ]);

            //Kategori::where('id', $request->id_k)
            //->update ([
              //  'kategori' => $request->kategori_k
            //]);
            Kategori::edit()->where('id',$request->id_k)->update([
                  'kategori' => $request->kategori_k
              ]);
        return redirect('/kategori');
    }
    public function delete($id){
        Kategori::destroy($id);
        return redirect('/kategori');
    }
}

?>