<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$pasien=DB::table('pasien')->get();
        //dd($pasien);
        $pasien = Pasien::all();
        //return view('pasien.data',['pasien'=>$pasien]);
        return view('pasien.data', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
            'norm'=>'required|unique:pasien',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp' =>'required'
        ],[
            'norm.required'=>'No RM Harus Diisi',
            'norm.unique' =>'No RM sudah ada',
            'nama.required'=>'Nama Harus Diisi',
            'alamat.required'=>'Alamat Harus Diisi',
            'no_hp.required'=>'No  Harus Diisi',
        ]);
        $data = Pasien::create([
            'norm'=>$request->input('norm'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
            'no_hp'=>$request->input('no_hp'),
        ]);
        return redirect()->route('pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pasien=Pasien::find($id);
        return view ('pasien.edit',compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated=$request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp' =>'required'
        ],[
            'nama.required'=>'Nama Harus Diisi',
            'alamat.required'=>'Alamat Harus Diisi',
            'no_hp.required'=>'No  Harus Diisi',
        ]);

        $datapasien = Pasien::find($id);
        $datapasien->update([
            
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
            'no_hp'=>$request->input('no_hp'),
        ]);
        return redirect()->route('pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $datapasien=Pasien::find($id);
        $datapasien->delete();
        return redirect()->route('pasien');

    }
}
