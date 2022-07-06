<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    protected $fillable = ['produk', 'kategori_id', 'stok'];
    protected $table = 'tabel_produk';

    public static function getProduk(){
        $produk = DB::table('tabel_produk')
        ->join('tabel_kategori', 'tabel_produk.kategori_id', '=', 'tabel_kategori.id')
        ->select('tabel_produk.*', 'tabel_kategori.kategori')
        ->get(); 

        return $produk;
    }

    public static function getIdProduk($id){
        $produk = DB::table('tabel_produk')
        ->join('tabel_kategori', 'tabel_produk.kategori_id', '=', 'tabel_kategori.id')
        ->where('tabel_produk.id' ,'=', $id)
        ->select('tabel_produk.*', 'tabel_kategori.kategori')
        ->get();
        return $produk;

    }

    public static function deleted($id){
        DB::table('tabel_produk')->where('id', '=', $id)->delete();

    }
}