@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('buku.store')}}">
    @csrf
    <div class="mt-4 ms-4 mb-3">
      <label class="form-label">Judul</label>
      <input type="text" name="judul" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 ms-4 ">
        <label class="form-label">Penulis</label>
        <input type="text" name="penulis" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Harga</label>
        <input type="text" name="harga" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Tanggal Terbit</label>
        <input type="date" name="tgl_terbit" aria-describedby="emailHelp">
      </div>
    <div  class="mb-3 ms-4 "><button type="submit" class="btn btn-primary">Simpan</button></div>
    <div  class="mb-3 ms-4 "><a href="/buku">Batal</a></div>
</form>
@endsection
