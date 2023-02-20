<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = User::where('role', 'user')->get();
        // dd($anggotas);
        return view('admin.anggota.index', compact('anggotas'));
    }
    public function indexAdmin()
    {
        $admins = User::where('role', 'admin')->get();
        // dd($anggotas);
        return view('admin.anggota.admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create(
            $request->all()
        );

        return redirect()->back();
    }
    public function storeAdmin(Request $request)
    {
        User::create(
            $request->all()
        );

        return redirect()->back();
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
        $anggota = User::findOrFail($id);
        $password = bcrypt($request->password);
        // dd($password);
        $anggota->update([
            'verif' => $request->verif,
            $request->all()
        ]);
        return redirect()->back();
    }
    public function updateAdmin(Request $request, $id)
    {
        $admins = User::findOrFail($id);
        $password = bcrypt($request->password);
        // dd($password);
        $admins->update([
            'verif' => $request->verif,
            $request->all()
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect()->back();
    }
    public function destroyAdmin($id)
    {
        $admins = User::find($id);
        $admins->delete();
        return redirect()->back();
    }
}
