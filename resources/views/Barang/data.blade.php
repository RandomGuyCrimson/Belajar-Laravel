@extends('Layout/layout')

@section('title')
Daftar Product
@endsection

@section('content')
<h3>Kafekoding Data Mentor</h3>
<button><a href="/Product/tambah_product"><i class="fa fa-plus"></i></a></button>
<table border=1 style="margin-top:10px">
    <tr align="center">
        <td width=150>Kode Barang</td>
        <td width=150>Nama Mentor</td>
        <td width=150>Kelas</td>
        <td width=150>Social Media</td>
        <td width=150>Aksi</td>
    </tr>
    @foreach ($products as $product)
    <tr align="center">
        <td>{{ $product->kode_barang }}</td>
        <td>{{ $product->nama_barang }}</td>
        <td>{{ $product->stock_barang }}</td>
        <td>{{ $product->harga_barang }}</td>
        <td align="center">
            <button><a href="/Product/Edit/{{ $product->kode_barang }}"><i class="fa fa-pencil"></i></a></button>
            <form action="/Product/{{$product->kode_barang}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="fa" value="&#xf1f8;">
            </form>
        </td>
    </tr>
    @endforeach
</table>
<br>

<button><a href="/">Logout</a></button>
@endsection