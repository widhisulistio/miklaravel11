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
        //
        // $pasien = DB::table('pasien')->get();
 
        // return view('pasien.data2', ['pasien' => $pasien]);

        // $pasien['data'] = Pasien::all();
        // return view('pasien.data2', $pasien);

        $pasien = Pasien::all();
        return view('pasien.data2', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
