@extends('layouts.header')

@section('content')
    <h1>Nama Pemain adalah : {{$data -> nama_pemain}}</h1>
    <h1>No Punggung Pemain adalah : {{$data -> no_punggung}}</h1>
    <h1>Posisi Pemain adalah : {{$data -> posisi}}</h1>
    <a href="{{route('pemain.index')}}">Kembali</a>
@endsection