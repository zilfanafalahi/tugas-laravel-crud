@extends('adminlte.master')

@section('content')
  <div class="card text-left">
    <div class="card-body">
      <h3><b>{{ $result->judul_pertanyaan }}</b></h3>
      <p class="card-text">{{ $result->isi_pertanyaan }}</p>
    </div>
    <div class="card-footer text-muted">
      Tanggal Dibuat : {{ $result->created_at }} -
      Tanggal Diperbaharui : {{ $result->updated_at }}
    </div>
  </div>
  
  <div class="card text-left">
    <div class="card-header text-bold">
      List Jawaban
    </div>
    <div class="card-body">
      @foreach ($jawaban as $j)
        <p class="card-text">{{ $j->isi_jawaban }}</p>
        <hr>
      @endforeach
    </div>
  </div>
  <div class="card card-inner">
    <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <form action="/jawaban/{{ $result->id }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="isi_jawaban">Input jawaban baru</label>
                <textarea class="form-control" id="isi_jawaban" name="isi_jawaban" rows="3"></textarea>
              </div>
              <input type="hidden" class="form-control" id="pertanyaan_id" name="pertanyaan_id" value="{{ $result->id }}">
              <a href="/pertanyaan" class="btn btn-warning">Kembali</a>
              <button type="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection