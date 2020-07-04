@extends('adminlte.master')

@section('content')
  <div class="card text-left">
    <div class="card-body">
      <h3><b>{{ $pertanyaan->judul_pertanyaan }}</b></h3>
      <p class="card-text">{{ $pertanyaan->isi_pertanyaan }}</p>
    </div>
    <div class="card-footer text-muted">
      Tanggal Dibuat : {{ $pertanyaan->created_at }} -
      Tanggal Diperbaharui : {{ $pertanyaan->updated_at }}
    </div>
  </div>
  <a href="/pertanyaan" class="btn btn-warning">Kembali</a>
@endsection