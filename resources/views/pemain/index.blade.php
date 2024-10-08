@extends('layouts.header')

@section('content')
<a href="{{route('pemain.create')}}">Tambah Pemain</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $data)
                <tr>
                    <td>{{$data -> id}}</td>
                    <td>{{$data -> nama_pemain}}</td>
                    <td>{{$data -> no_punggung}}</td>
                    <td>{{$data -> posisi}}</td>
                    <td>
                        <a href="{{route('pemain.show', $data -> id)}}">Detail</a>
                        <a href="{{route('pemain.edit', $data -> id)}}">Ubah data pemain</a>
                        <form action="{{route('pemain.destroy', $data -> id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Apakah Yakin ingin menghapus?')" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection