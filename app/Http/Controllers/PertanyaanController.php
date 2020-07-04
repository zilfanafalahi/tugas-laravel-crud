<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::get_pertanyaan();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $pertanyaan = Pertanyaan::save_pertanyaan($data);
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $pertanyaan = Pertanyaan::detail_pertanyaan($id);
        return view('pertanyaan.detail', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::edit_pertanyaan($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::update_pertanyaan($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $deleted = Pertanyaan::destroy_pertanyaan($id);
        return redirect('/pertanyaan');
    }
}
