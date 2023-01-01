@extends('Layout/layout')

@section('title')
Tambah Data Product
@endsection

@section('content')
<table>
    <form action="/Product/{{$product -> kode_barang}}" method="POST">
        @csrf
        @method('put')
        <tr>
            <td>Kode Barang</td>
            <td><input type="text" name="kode_barang" id="kode_barang" value="{{$product->kode_barang}}"></td>
        </tr>
        <tr>
            <td>Nama Mentor</td>
            <td><input type="text" name="nama_barang" id="nama_barang" value="{{$product->nama_barang}}"></td>
        </tr>
        <tr>
            <td>Stock Barang</td>
            <td><input type="number" name="stock_barang" id="stock_barang" value="{{$product->stock_barang}}"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="number" name="harga_barang" id="harga_barang" value="{{$product->harga_barang}}"></td>
        </tr>
        <tr>
            <td colspan=2 align="right">
                <input type="reset" value="Reset">
                <input type="submit" value="Submit" name="submit">
            </td>
        </tr>
    </form>
</table>
<button><a href="/Product">Kembali</a></button>
@endsection