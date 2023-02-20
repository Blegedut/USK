<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->get();
        // $p = 
        // dd($peminjamans);
        return view('user.peminjaman.riwayat', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bukus = Buku::all();
        // dd($bukus);
        return view('user.peminjaman.form', compact('bukus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total_peminjaman = Peminjaman::where('user_id', Auth::user()->id)
            ->where('tanggal_pengembalian', null)->count();

        if ($total_peminjaman >= 5) {
            return redirect()->back()
                ->with("status", "danger")
                ->with("message", "Tidak Bisa Meminjam Buku Lebih Dari 5");
        }

        $cek_buku = Peminjaman::where('buku_id', $request->buku_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if ($cek_buku) {
            return redirect()->back()
                ->with("status", "danger")
                ->with("message", "Tidak Bisa Meminjam Buku Dengan Judul Yang Sama");
        }

        $pijam_buku = Peminjaman::create($request->all());

        $buku = Buku::where('id', $request->buku_id)->first();
        if ($request->kondisi_saat_dipinjam == 'baik') {
            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik - 1,
            ]);
        } else {
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak - 1,
            ]);
        }

        if ($pijam_buku) {
            return redirect()->route("user.riwayat_peminjaman")
                ->with("status", "success")
                ->with("message", "Berhasil meminjam buku");
        }
        return redirect()->back()
            ->with("status", "danger")
            ->with("message", "Gagal meminjam buku");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
