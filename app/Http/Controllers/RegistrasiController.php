<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    

    public function proses(Request $request){

        $user = array();
        $user['nik'] = $request->nik;
        $user['nama_depan'] = $request->nama_depan;
        $user['nama_tengah'] = $request->nama_tengah;
        $user['nama_akhir'] = $request->nama_akhir;
        $user['alamat'] = $request->alamat;
        $user['rt'] = $request->rt;
        $user['rw'] = $request->rw;
        $user['kode_pos'] = $request->kode_pos;
        $user['kota_kab'] = $request->kota_kab;
        $user['kecamatan'] = $request->kecamatan;
        $user['kelurahan'] = $request->kelurahan;
        $user['no_telp'] = $request->no_telp;
        $user['no_hp'] = $request->no_hp;
        $user['email'] = $request->email;

        $ses = session('user', $user);

        return redirect()->route('beranda');
    }

    public function getNIK($nik){

        $nik_daftar = array('3174050101900003', '3174050102900003');

        if (in_array( $nik , $nik_daftar)) {
            $data['nama_depan'] = 'Fikri';
            $data['nama_tengah'] = 'Reza';
            $data['nama_akhir'] = 'Alhadi';
            $data['alamat'] = 'Jl. Denpasar Raya';
            $data['rt'] = '08';
            $data['rw'] = '010';
            $data['kode_pos'] = '12345';
            $data['kota'] = 'Kab. Badung';
            $data['kecamatan'] = 'KUTA';
            $data['kelurahan'] = 'SEMINYAK';

            return $data;
        }else{
            $data['kosong'] = 'kosong';

            return $data;
        }

    }
}
