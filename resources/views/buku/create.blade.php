@extends('layout.master')

@section('title', 'create')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Tambah Buku</h4>
        @if (count($errors) > 0)
            <ul class="alert alert-danger px-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('buku.store') }}">
            @csrf
            <table>
                <tr><td>Judul buku</td><td><input type="text" name="judul" class="px-1"></td></tr>
                <tr><td>Penulis</td><td><input type="text" name="penulis" class="px-1"></td></tr>
                <tr><td>Tanggal terbit</td><td><input type="date" name="tgl_terbit" class="date px-1" placeholder="yyyy/mm/dd"></td></tr>
                <tr><td>Harga</td><td><input type="text" name="harga" class="px-1"></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="/buku" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
@endsection