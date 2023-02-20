<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function cetak_laporan(Request $request)
    {
        $peminjaman = Peminjaman::where('tanggal_peminjaman', $request->tanggal_peminjaman)->with('buku','user')->get();
        
        // dd($peminjaman);
 
    	$pdf = PDF::loadview('admin.laporan.laporan_pdf',['peminjaman'=>$peminjaman])->setPaper('a4', 'landscape');
    	return $pdf->stream('laporan-peminjaman-buku-pdf');
    }
    public function index()
    {
    	return view('admin.laporan.laporan');
    }
}
