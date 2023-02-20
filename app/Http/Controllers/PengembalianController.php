<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Peminjaman::where('user_id', Auth::user()->id)
            ->where('tanggal_pengembalian', '!=', null)
            ->get();
        // dd($buku);
        return view('user.pengembalian.riwayat', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Peminjaman::where('user_id', Auth::user()->id)
            ->where('tanggal_pengembalian', null)
            ->get();
        // dd($buku);
        return view('user.pengembalian.form', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengembalian = Peminjaman::where('user_id', $request->user_id)
        ->where('buku_id', $request->buku_id)
        ->where('tanggal_pengembalian', null)
        ->first();

        $pengembalian->update([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'kondisi_saat_dikembalikan' => $request->kondisi_saat_dikembalikan
        ]);

        $buku = Buku::where('id', $request->buku_id)->first();

        if($request->kondisi_saat_dikembalikan == 'baik') {
            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik + 1
            ]);
        }
        if($pengembalian->kondisi_saat_dipinjam == 'rusak' && $request->kondisi_saat_dikembalikan =='rusak') {
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1 
            ]);
            $pengembalian->update([
                'denda' => 0
            ]);
        }
        if($pengembalian->kondisi_saat_dipinjam != 'rusak' && $request->kondisi_saat_dikembalikan == 'rusak') {
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1
            ]);
            $pengembalian->update([
                'denda' => 20000
            ]);
        }
        
        if($request->kondisi_saat_dikembalikan == 'hilang') {
            $pengembalian->update([
                'denda' => 50000
            ]);
        }

        return redirect()->route('user.riwayat_pengembalian');
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
    public function destroy($id)
    {
        //
    }
}
