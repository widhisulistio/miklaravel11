<?php

namespace App\Http\Controllers\Api;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PasienResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PasienApiController extends Controller
{
    //
    public function index(){
        //mendapatkan semua data

        $pasien = Pasien::latest()->paginate(5);

        return new PasienResource(true, 'List Data Pasien', $pasien); //berurutan status, message, dan data
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'norm'=>'required|unique:pasien',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp' =>'required',
            'file'=>'required|mimes:pdf',
        ]);

        //cek validator
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        //upload file

        $file = $request->file('file');
        $file->storeAs('public/files',$file->hashName());

        //simpan
        $pasien = Pasien::create([
            'norm'=>$request->input('norm'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
            'no_hp'=>$request->input('no_hp'),
            'file'=>$file->hashName(),
        ]);
        //return response
        return new PasienResource(true, 'Data Pasien Berhasil Ditambahkan!', $pasien);
    }

    public function show($id){
        $pasien = Pasien::find($id);
        return new PasienResource(true, 'Detail Data Pasien!', $pasien);
    }

    public function update(Request $request, $id){
        //define validation rules
        $validator = Validator::make($request->all(), [
            // 'norm'=>$request->input('norm'),
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp' =>'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $pasien = Pasien::find($id);

        //check if file is not empty
        if ($request->hasFile('file')) {

            //upload file
            $file = $request->file('file');
            $file->storeAs('public/files', $file->hashName());

            //delete old file
            Storage::delete('public/files/' . basename($pasien->file));

            //update pasien with new file
            $pasien->update([
                // 'norm'=>$request->input('norm'),
                'nama'=>$request->input('nama'),
                'alamat'=>$request->input('alamat'),
                'no_hp'=>$request->input('no_hp'),
                'file'=>$file->hashName(),
            ]);
        } else {

            //update pasien without file
            $pasien->update([
                // 'norm'=>$request->input('norm'),
                'nama'=>$request->input('nama'),
                'alamat'=>$request->input('alamat'),
                'no_hp'=>$request->input('no_hp'),
            ]);
        }

        //return response
        return new PasienResource(true, 'Data Post Berhasil Diubah!', $pasien);
    }

    public function destroy($id)
    {

        //find post by ID
        $pasien = Pasien::find($id);

        //delete image
        Storage::delete('public/files/'.basename($pasien->file));

        //delete post
        $pasien->delete();

        //return response
        return new PasienResource(true, 'Data Pasien Berhasil Dihapus!', null);
    }
}


