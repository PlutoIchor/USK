<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPeminjaman(Request $request)
    {
        $pinjamanBaru = Peminjaman::create($request->all());
        return response()->json([
            'Buku berhasil dipinjam' => $pinjamanBaru
        ]);
    }

    public function createPengembalian(Request $request)
    {
        $pengembalianBaru = Peminjaman::create($request->all());
        return response()->json([
            'Buku berhasil dipinjam' => $pengembalianBaru
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporanPeminjamanPengembalianAdmin()
    {
        $laporan = Peminjaman::get();
        return response()->json([
            'Laporan Peminjaman dan Pengembalian' => $laporan
        ]);
    }

    public function laporanPeminjamanPengembalianUser()
    {
        $laporan = Peminjaman::where('id_anggota', '=', Auth::user()->id)->get();
        return response()->json([
            'Laporan Peminjaman dan Pengembalian' => $laporan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function laporanDataPerpustakaan(Request $request, $dataYgDiminta)
    {
        if ($dataYgDiminta == 'peminjaman') {
            $data = Peminjaman::where('tanggal_peminjaman', '=', $request->data)->get();
        } elseif ($dataYgDiminta == 'pengembalian') {
            $data = Peminjaman::where('tanggal_pengembalian', '=', $request->data)->get();
        } else {
            $data = User::where('fullname', 'LIKE', $request->data)->get();
        }
        return response()->json([
            "Data $dataYgDiminta" => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPeminjaman($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return response()->json([
            'message' => 'Berhasil menghapus data peminjaman'
        ]);
    }
}
