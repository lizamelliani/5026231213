@extends('template')

@section('content')
	<h3>KARYAWAN</h3>

	<a href="/eas/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

	<p>Cari data karyawan :</p>
<form action="/eas/cari" method="GET">
	<input type="text" name="cari" placeholder="Tambah karyawan .." value="{{ old('cari') }}">
	<input type="submit" value="CARI" class="btn btn-info">
</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>NIP</th>
			<th>nama</th>
			<th>pangkat</th>
			<th>gaji</th>
		</tr>
		@foreach($eas as $p)
        <tr>
			<td>{{ $p->eas_NIP }}</td>
			<td>{{ $p->eas_nama }}</td>
			<td>{{ $p->eas_pangkat }}</td>
			<td>{{ $p->eas_gaji }}</td>
			<td>
				|
				<a href="/eas/hapus/{{ $p->NIP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $eas->links() }}
    @endsection