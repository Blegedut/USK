<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserRegister extends Controller
{
    public function register(Request $request)
    {
        $kode = User::where('role', 'user')->count();

        $anggota = User::create([
            'kode' => 'AA00' . $kode + 1,
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'kelas' => $request->kelas,
            'verif' => 'unverified',
            'role' => 'user',
            'join_date' => Carbon::now()
        ]);
        dd($kode);


        if ($anggota) {
            return redirect()->route('login')
                ->with("status", "success")
                ->with("message", "Register berhasil, tunggu admin verifikasi");
        }
        return redirect()->back()
            ->with("status", "danger")
            ->with("message", "Gagal menambah data");
    }
}
