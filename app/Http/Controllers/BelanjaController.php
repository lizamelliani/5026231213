<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
;   

class BelanjaController extends Controller
{
    // Tampilkan data keranjang
    public function index()
    {
        // Mengambil semua data dari tabel keranjangbelanja
        $keranjang = DB::table('keranjangbelanja')->paginate(10);

        // Mengirim ke view
        return view('belanja.shopee', ['keranjang' => $keranjang]);
    }

    // Tampilkan form tambah
    public function tambah()
    {
        return view('belanja.tambah');
    }

    // Proses tambah data
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/keranjang');
    }

    // Hapus data
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjang');
    }

    // Pencarian berdasarkan kode barang
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $keranjang = DB::table('keranjangbelanja')
            ->where('KodeBarang', 'like', "%" . $cari . "%")
            ->paginate();

        return view('belanja.shopee', ['keranjang' => $keranjang, 'cari' => $cari]);
    }
}
