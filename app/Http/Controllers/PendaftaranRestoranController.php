<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranRestoranController extends Controller
{
    

    public function index()
    {
        return view('pendaftaran.restoran');
    }

    public function store(Request $request){

        $data = array();
        $data['nop_pbb'] = $request->nop_pbb;
        $data['nama_objek_pajak'] = $request->nama_objek_pajak;
        $data['alamat'] = $request->alamat;
        $data['rt'] = $request->rt;
        $data['rw'] = $request->rw;

        return redirect()->route('pendaftaran-restoran')->with('berhasil', 'Objek Pajak '.$data['nama_objek_pajak'].' berhasil dibuat dan akan di Verifikasi Pihak Terkait.')->with('dataBaru', $data);
    }

    public function update(Request $request){

        $data = array();
        $data['nop_pbb'] = $request->nop_pbb;
        $data['nama_objek_pajak'] = $request->nama_objek_pajak;
        $data['alamat'] = $request->alamat;
        $data['rt'] = $request->rt;
        $data['rw'] = $request->rw;

        return redirect()->route('pendaftaran-restoran')->with('update', 'Objek Pajak '.$data['nama_objek_pajak'].' berhasil dirubah dan akan di Verifikasi Pihak Terkait.')->with('dataBaru', $data);
    }
}
