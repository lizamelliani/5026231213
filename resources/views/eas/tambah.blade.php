@extends('template')

@section('content')
	<h3>Tambah Data</h3>

	<a href="/index" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="text" name="KodeBarang" required="required" class="form-control">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="text" name="Jumlah" required="required" class="form-control">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Harga per item
            </div>
            <div class="col-8">
                <input type="text" name="Harga" required="required" class="form-control">
            </div>
        </div>
        <br/>

		<input type="submit" value="Simpan Pembelian" class="btn btn-success" style="margin-bottom: 15px;">

	</form>

@endsection
