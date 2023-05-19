<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrasiPeminjamanController extends Controller
{
    public function index(){
        return view('registrasi_peminjaman');
    }

    public function hasil(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'date' => 'required',
            'select' => 'required',
            'number' => 'required',        
        ]);

        return view('hasil_peminjaman', [
            'data' => $request
        ]);
    }
}
