<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel{
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
    return $artikel;
    }

    public static function save($data){
        $data['slug'] = Str::slug($data['judul'], '-');
        $new_artikel = DB::table('artikel')->insert($data);
    return $new_artikel;
    }

    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id', $id)->first();
        return $artikel;
    }

    public static function update($id, $request){
        $artikel = DB::table('artikel')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'tag' => $request["tag"]
                        ]);
        return $artikel;
    }

    public static function destroy($id){
        $deleted = DB::table('artikel')
                        ->where('id', $id)
                        ->delete();
        return $deleted;
    }
}

?>