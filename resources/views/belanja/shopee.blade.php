@extends('template')

@section('content')
<h3>Data Keranjang Belanja</h3>

<a href="/keranjang/tambah" class="btn btn-primary"> + Beli (Tambah Barang)</a>

<p>Cari Data :</p>
<form action="/keranjang/cari" method="GET">
    <input type="text" name="cari" class="form-control" placeholder="Cari Kode Barang ..">
    <input type="submit" class="btn btn-info mt-1" value="CARI">
</form>
<br/>

<table class="table table-bordered">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach($keranjang as $k)
    <tr>
        <td>{{ $k->ID}}</td>
        <td>{{ $k->KodeBarang }}</td>
        <td>{{ $k->Jumlah }}</td>
        <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
        <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
        <td>
            <a href="/keranjang/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $keranjang->links() }}
@endsection
