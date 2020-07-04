@extends('adminlte.master')

@section('content')
    <a href="/pertanyaan/create" class="btn btn-primary mb-3">Buat pertanyaan!</a>
    @foreach ($pertanyaan as $key => $p)
      <div class="card text-left">
        <div class="card-body">
          <h3><b>{{ $p->judul_pertanyaan }}</b></h3>
          <p class="card-text">{{ $p->isi_pertanyaan }}</p>
          <p class=" text-muted">Tanggal dibuat : {{ $p->created_at }}</p>
        </div>
        <div class="card-footer">
          <a href="/jawaban/{{ $p->id }}" class="btn btn-success btn-sm">Lihat Jawaban</a>
          <a href="/pertanyaan/{{ $p->id }}" class="btn btn-primary btn-sm">Detail Pertanyaan</a>
          <a href="/pertanyaan/{{ $p->id }}/edit" class="btn btn-primary btn-sm">Edit Pertanyaan</a>
          <form action="/pertanyaan/{{ $p->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="d-inline-block btn btn-danger btn-sm ">Hapus Pertanyaan</button>
          </form>
        </div>
      </div>
    @endforeach
@endsection