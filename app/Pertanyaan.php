<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Pertanyaan extends Model
{
    public static function get_pertanyaan(){
        $pertanyaan = DB::table('tbl_pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save_pertanyaan($data){
        unset($data['_token']);
        $date = Carbon::now();

        $data['created_at'] = $date;
        $data['updated_at'] = $date;
        
        $new_pertanyaan = DB::table('tbl_pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function detail_pertanyaan($id){
        $pertanyaan = DB::table('tbl_pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function edit_pertanyaan($id){
        $pertanyaan = DB::table('tbl_pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function update_pertanyaan($id, $request){
        $date = Carbon::now();

        $pertanyaan = DB::table('tbl_pertanyaan')->where('id', $id)->update(['judul_pertanyaan'=>$request['judul_pertanyaan'],'isi_pertanyaan'=>$request['isi_pertanyaan'], 'updated_at'=>$date]);
        return $pertanyaan;
    }

    public static function destroy_pertanyaan($id){
        $pertanyaan = DB::table('tbl_pertanyaan')->where('id', $id)->delete();
        return $pertanyaan;
    }

    public static function get_comment_pertanyaan($id){
        $pertanyaan = DB::table('tbl_pertanyaan')->where('id', $id)->get();
        return $pertanyaan;
    }
}
