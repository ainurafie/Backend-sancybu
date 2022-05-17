<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\PseudoTypes\False_;

class PengaduanController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => 'ini data'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name_pengadu' => 'required',
            'email_pengadu' => 'required|email',
            'phone_pengadu' => 'required|numeric',
            'nama_korban' => 'required',
            'nik_korban' => 'required|numeric',
            'phone_korban' => 'required|numeric',
            'email_korban' => 'required|email',
            'agama_korban' => 'required',
            'alamat_korban' => 'required',
            'account' => 'required',
            'platform' => 'required',
            'kronologi' => 'required',
            'bukti' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'error' => TRUE,
                'data' => $validator->errors()
            ]);       
        }

        Pengaduan::create($request->all());

       // $poster = time() . '.' . $request->bukti->extension();
        //$request->bukti->move(public_path('bukti/'), $poster);
        return response()->json([
            "success" => TRUE,
            "message" => "Data hass been uploaded" 
        ]);
    }
}
