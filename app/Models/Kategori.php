<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    protected $fillable = ['kategori'];
    protected $table='tabel_kategori';

    public static function getKategori(){
        $kategori = DB::table('tabel_kategori')->get();
        return $kategori;
    }

    public static function getById($id){
        $kategori = DB::table('tabel_kategori')->where('id', $id)->get();
        return $kategori;
    }

    public static function create(){
               $create = DB::table('tabel_kategori');
        return $create;
    }

    public static function edit(){
        $updated = DB::table('tabel_kategori');
    return $updated;
    }

    public static function deleted($id){
    DB::table('tabel_kategori')->where('id', '=', $id)->delete();
    }

}
