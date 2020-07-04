@extends('adminlte.master')

@section('content')
  <form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
      <label for="judul_pertanyaan">Judul pertanyaan</label>
      <input type="text" class="form-control" id="judul_pertanyaan" name="judul_pertanyaan">
    </div>
    <div class="form-group">
      <label for="isi_pertanyaan">Isi pertanyaan</label>
      <textarea class="form-control" id="isi_pertanyaan" name="isi_pertanyaan" rows="3"></textarea>
    </div>
    <a href="/pertanyaan" class="btn btn-warning">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection