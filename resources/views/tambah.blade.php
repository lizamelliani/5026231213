@extends('template')

@section('content')
<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">

		Nama
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
                <div class="row">
            <div class="col-3">

		Jabatan
            </div>
            <div class="col-8">
                <input type="text" name="jabatan" required="required" class="form-control">
            </div>
        </div>        <div class="row">
            <div class="col-3">

		Umur
            </div>
            <div class="col-8">
                <input type="text" name="umur" required="required" class="form-control">
            </div>
        </div>        <div class="row">
            <div class="col-3">

		Alamat
            </div>
            <div class="col-8">
                <input type="text" name="alamat" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection