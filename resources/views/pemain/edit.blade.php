@extends('layouts.header')

@section('content')
    <h4>Edit Buku</h4>
    <form action="{{route('pemain.update', $data -> id)}}" method="post">
        @csrf
        <div class="">Nama Pemain<input type="text" name="nama" id="" value="{{$data -> nama_pemain}}"></div>
        <div class="">No Punggung<input type="text" name="no_punggung" id="" value="{{$data -> no_punggung}}"></div>
        <div class="">Posisi<input type="text" name="posisi" id="" value="{{$data -> posisi}}"></div>
        <button type="submit">Simpan</button>
        <a href="{{route('pemain.index')}}">Kembali</a>
    </form>
@endsection