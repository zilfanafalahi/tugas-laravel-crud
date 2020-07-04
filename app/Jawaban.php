<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Jawaban extends Model
{
    
    public static function get_jawaban($pertanyaan_id){
        $jawaban = DB::table('tbl_jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $jawaban;
    }

    public static function save_jawaban($data){
        unset($data['_token']);
        $date = Carbon::now();

        $data['created_at'] = $date;
        $data['updated_at'] = $date;
        
        $new_jawaban = DB::table('tbl_jawaban')->insert($data);
        return $new_jawaban;
    }
}
