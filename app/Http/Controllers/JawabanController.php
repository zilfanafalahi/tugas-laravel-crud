<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = Pertanyaan::get_comment_pertanyaan($id);
        $jawaban = Jawaban::get_jawaban($id);
        foreach($pertanyaan as $key){
            return view('jawaban.index', ['result' => $key, 'jawaban' => $jawaban]);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $jawaban = Jawaban::save_jawaban($data);
        return redirect()->back();
    }
}
