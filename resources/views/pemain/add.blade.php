@extends('layouts.header')
@section('content')
    <form action="{{route('pemain.store')}}" method="post">
        @csrf
        <div class="">Nama Pemain <input type="text" name="nama" id=""></div>
        <div>
            @error('nama')
                {{$message}}
            @enderror
        </div>
        <div class="">No Punggung <input type="text" name="no_punggung" id=""></div>
        <div>
            @error('no_punggung')
                {{$message}}
            @enderror
        </div>
        <div class="">Posisi <input type="text" name="posisi" id=""></div>
        <div>
            @error('posisi')
                {{$message}}
            @enderror
        </div>

        <button type="submit">Tambah Pemain</button> <br>
        <a href="{{route('pemain.index')}}">Kembali</a>
    </form>
@endsection