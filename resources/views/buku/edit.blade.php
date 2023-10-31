@extends('layout.master')

@section('title', 'edit')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Update Data Buku</h4>
        <form method="POST" action="{{ route('buku.update', $buku->id) }}">
            @csrf
            <table>
                <tr><td>Judul buku</td><td><input type="text" name="judul" value="{{ $buku->judul }}"></td></tr>
                <tr><td>Penulis</td><td><input type="text" name="penulis" value="{{ $buku->penulis }}"></td></tr>
                <tr><td>Tanggal terbit</td><td><input type="text" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></td></tr>
                <tr><td>Harga</td><td><input type="text" name="harga" value="{{ $buku->harga }}"></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="/buku" class="btn btn-primary">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection