<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class easController extends Controller
{
    // Tampilkan data karyawan
    public function index()
    {
        // Mengambil semua data dari tabel newkaryawan
        $newkaryawan = DB::table('newkaryawan')->get();

        // Mengirim ke view
        return view('index.tambah', ['newkaryawan' => $newkaryawan]);
    }

    // Tampilkan form tambah
    public function tambah()
    {
        return view('index.tambah');
    }

    // Proses tambah data
    public function store(Request $request)
    {
        DB::table('newkaryawan')->insert([
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);

        return redirect('/newkaryawan');
    }

    // Hapus data
    public function hapus($id)
    {
        DB::table('newkaryawan')->where('NIP', $NIP)->delete();
        return redirect('/index');
    }

    // Pencarian berdasarkan kode barang
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $keranjang = DB::table('newkaryawan')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index.tambah', ['newkaryawan' => $newkaryawan, 'cari' => $cari]);
    }
}
