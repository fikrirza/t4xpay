@extends('layout.master')

@section('title')
<title>Tambah Objek Pajak Hotel</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="row clear-fix">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{ route('beranda') }}">Beranda</a></li>
			<li><a href="{{ route('pendaftaran-hotel') }}">Daftar Hotel</a></li>			
			<li class="active">Form Pendaftaran Hotel</li>
		</ol>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-right"></div>
</div>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>FORM PENDAFTARAN OBJEK PAJAK DAERAH - PAJAK HOTEL</h2>
			</div>
			<div class="body">
                    <form class="form-horizontal" id="form_validation" method="POST" action="#">
                        {{ csrf_field() }}
                        <h2 class="card-inside-title">I. Data Objek Pajak</h2>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Nama Objek Pajak</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_objek_pajak" class="form-control" placeholder="Nama Objek Pajak" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="alamat" class="form-control" placeholder="Alamat objek pajak" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">RT</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="rt" class="form-control" placeholder="RT" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">RW</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="rw" class="form-control" placeholder="RW" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Kelurahan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kelurahan" data-live-search="true" required>
                                            <option value="">-- Pilih Kelurahan --</option>
                                            <option>Kelurahan 1</option>
                                            <option>Kelurahan 2</option>
                                            <option>Kelurahan 3</option>
                                            <option>Kelurahan 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Kecamatan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kecamatan" data-live-search="true" required>
                                            <option value="">-- Pilih Kecamatan --</option>
                                            <option>Kecamatan 1</option>
                                            <option>Kecamatan 2</option>
                                            <option>Kecamatan 3</option>
                                            <option>Kecamatan 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Kota/kab. Adm</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kota" data-live-search="true" required>
                                            <option value="">-- Pilih Kota --</option>
                                            <option>Kota 1</option>
                                            <option>Kota 2</option>
                                            <option>Kota 3</option>
                                            <option>Kota 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Nomor Telepon</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">TMT Operasi</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="tmt_operasi" class="form-control" placeholder="TMT Operasi" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">NOP PBB</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="nop_pbb" class="form-control" placeholder="NOP PBB" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <h2 class="card-inside-title">II. Data Wajib Pajak</h2>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Nama Badan Hukum</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_badan_hukum" class="form-control" placeholder="Nama Badan Hukum" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">NIK/NPWP</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="nik_npwp" class="form-control" placeholder="NIK/NPWP" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">NPWPD</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="npwpd" class="form-control" placeholder="NPWPD" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <h2 class="card-inside-title">III. Data Usaha</h2>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Status Usaha</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <input name="status_usaha" type="radio" id="radio_3" class="with-gap radio-col-red"/>
                                    <label for="radio_3">Induk</label>
                                    <input name="status_usaha" type="radio" id="radio_4" class="with-gap radio-col-red" />
                                    <label for="radio_4">Cabang</label>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                <label for="">Klasifikasi Hotel</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <input name="klasifikasi_hotel" type="radio" id="radio_30" class="with-gap radio-col-red" />
                                        <label for="radio_30">Bintang Lima Berlian</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_31" class="with-gap radio-col-red" />
                                        <label for="radio_31">Bintang Lima</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_32" class="with-gap radio-col-red" />
                                        <label for="radio_32">Bintang Empat</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_33" class="with-gap radio-col-red" />
                                        <label for="radio_33">Bintang Tiga</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_34" class="with-gap radio-col-red" />
                                        <label for="radio_34">Bintang Dua</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_35" class="with-gap radio-col-red" />
                                        <label for="radio_35">Bintang Satu</label><br>    
                                    </div>
                                    <div class="col-md-2">
                                        <input name="klasifikasi_hotel" type="radio" id="radio_36" class="with-gap radio-col-red" />
                                        <label for="radio_36">Melati Tiga</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_37" class="with-gap radio-col-red" />
                                        <label for="radio_37">Melati Dua</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_38" class="with-gap radio-col-red" />
                                        <label for="radio_38">Melati Satu</label><br>
                                        <input name="klasifikasi_hotel" type="radio" id="radio_39" class="with-gap radio-col-red" />
                                        <label for="radio_39">Rumah Kost</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Luas Tempat Usaha</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="luas_tempat_usaha" placeholder="Luas Tempat Usaha" required>
                                        </div>
                                        <span class="input-group-addon">M<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Luas Bangunan</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan" required>
                                        </div>
                                        <span class="input-group-addon">M<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Status Kepemilikan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <input name="stt_tempat_usaha" type="radio" id="radio_47" class="with-gap radio-col-red" />
                                    <label for="radio_47">Milik Sendiri</label><br>
                                    <input name="stt_tempat_usaha" type="radio" id="radio_48" class="with-gap radio-col-red" />
                                    <label for="radio_48">Sewa/Kontrak</label><br>
                                    <input name="stt_tempat_usaha" type="radio" id="radio_49" class="with-gap radio-col-red" />
                                    <label for="radio_49">Bagi Hasil</label>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Jumlah Kamar</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="jumlah_kamar" placeholder="Jumlah Kamar" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Tipe dan Tarif Kamar</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4 form-control-label">
                                <label for="">1. Type</label>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="type_1" class="form-control" value="Standar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="kamar_1" class="form-control" placeholder="Jumlah Kamar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 form-control-label">
                                <div class="form-group">
                                      <label for="">Tarif</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="harga_1" class="form-control" placeholder="Rp. Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="per_1" class="form-control" placeholder="/Malam">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {{-- <label for="">Tipe dan Tarif Kamar</label> --}}
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">2. Type</label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="type_2" class="form-control" placeholder="Kamar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="kamar_2" class="form-control" placeholder="Jumlah Kamar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 form-control-label">
                                    <div class="form-group">
                                          <label for="">Tarif</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="harga_2" class="form-control" placeholder="Rp. Harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="per_2" class="form-control" placeholder="/Malam">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {{-- <label for="">Tipe dan Tarif Kamar</label> --}}
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">3. Type</label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="type_3" class="form-control" placeholder="Standar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="kamar_3" class="form-control" placeholder="Jumlah Kamar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 form-control-label">
                                    <div class="form-group">
                                            <label for="">Tarif</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="harga_3" class="form-control" placeholder="Rp. Harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="per_3" class="form-control" placeholder="/Malam">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    {{-- <label for="">Tipe dan Tarif Kamar</label> --}}
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">4. Type</label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="type_4" class="form-control" placeholder="Standar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="kamar_4" class="form-control" placeholder="Jumlah Kamar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 form-control-label">
                                    <div class="form-group">
                                            <label for="">Tarif</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="harga_4" class="form-control" placeholder="Rp. Harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="per_4" class="form-control" placeholder="/Malam">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">Bukti Pembayaran</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                    <div class="form-group">
                                        <input name="bukti_bayar" type="radio" id="radio_45" class="with-gap radio-col-red" />
                                        <label for="radio_45">Bon/Bill</label><br>
                                        <input name="bukti_bayar" type="radio" id="radio_46" class="with-gap radio-col-red" />
                                        <label for="radio_46">Struk/Kas Register</label><br>
                                        <input name="bukti_bayar" type="radio" id="radio_44" class="with-gap radio-col-red" />
                                        <label for="radio_44">Lainnya</label><br>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">Alat Transaksi</label>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            Merk
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="merk" class="form-control" placeholder="Merk" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                    <label for=""></label>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            Tipe
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="tipe" class="form-control" placeholder="Tipe" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                    <label for=""></label>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            Jumlah
                                        </span>
                                        <div class="form-line">
                                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                    <label for="">Fasilitas Hotel</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                    <div class="form-group">
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_21" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_21">Persewaan Ruangan</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_22" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_22">Fitness Center</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_23" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_23">Restoran</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_24" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_24">Kolam Renang</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_25" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_25">Lapangan Tenis</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_26" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_26">Klub Malam/ Karaoke</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_27" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_27">Diskotek</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_28" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_28">Pub/ Bar/ Cafe</label><br>
                                        <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_29" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_29">Spa</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Fasilitas Parkir</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <input name="parkir" type="radio" id="radio_50" class="with-gap radio-col-red"/>
                                        <label for="radio_50" value="ada">Ada</label>
                                        <input name="parkir" type="radio" id="radio_51" class="with-gap radio-col-red" />
                                        <label for="radio_51" value="tidak">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Kapasitas Parkir</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Motor
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Jumlah Motor" required>
                                            </div>
                                            <span class="input-group-addon">
                                                Unit
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mobil
                                            </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Jumlah Mobil" required>
                                            </div>
                                            <span class="input-group-addon">
                                                Unit
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Pengelola Parkir</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pengelola" class="form-control" placeholder="Pengelola Parkir" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Dipungut Bayaran</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <input name="bayaran" type="radio" id="radio_52" class="with-gap radio-col-red"/>
                                            <label for="radio_52">Ya</label>
                                            <input name="bayaran" type="radio" id="radio_53" class="with-gap radio-col-red" />
                                            <label for="radio_53">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">IV. Lampiran Perizinan</h2>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 form-control-label"><label for="">Jenis Perizinan</label></div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="izin_pariwisata" class="form-control">
                                            <label class="form-label">Izin Pariwisata Nomor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="izin_pariwisata_berlaku" class="form-control">
                                            <label class="form-label">Masa Berlaku</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 form-control-label"></div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="izin_gangguan">
                                            <label class="form-label">Izin Undang-undang Gangguan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="izin_gangguan_berlaku">
                                            <label class="form-label">Masa Berlaku</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 form-control-label"></div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="izin_sumur_bor" class="form-control">
                                            <label class="form-label">Izin Sumur Bor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="izin_sumur_bor_berlaku" class="form-control">
                                            <label class="form-label">Masa Berlaku</label>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 form-control-label"></div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="izin_mengelola_parkir" class="form-control">
                                            <label class="form-label">Izin Mengelola Parkir</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="izin_mengelola_parkir" class="form-control">
                                            <label class="form-label">Masa Berlaku</label>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 form-control-label"></div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="izin_reklame" class="form-control">
                                            <label class="form-label">Izin Reklame</label>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="izin_reklame" class="form-control">
                                            <label class="form-label">Masa Berlaku</label>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Keterangan Lain-lain</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea id="password_2" class="form-control" placeholder="Keterangan Tambahan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Syarat dan Ketentuan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <textarea rows="3" id="s_d_k" class="form-control" readonly>Dengan menyadari sepenuhnya akan segala akibat termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan yang berlaku, saya menyatakan bahwa apa yang telah saya beri tahukan di atas, beserta lampiran-lampirannya adalah benar dan lengkap.</textarea>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                                </div>
                            </div>

                    </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('bottomscript')
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
<script>
$(function () {
    $('#form_validation').validate({
		rules: {
            'status_usaha': {
                required: true
			},
			'klasifikasi_hotel': {
                required: true
			},
			'stt_tempat_usaha': {
                required: true
            },
            'bukti_bayar': {
                required: true
            },
            'fasilitas_penunjang': {
                required: true
            },
            'parkir': {
                required: true
            },
            'bayaran': {
                required: true
            },
        },

        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });
    
    $(".box").hide();
    $("#radio_50").click(function () {
        $(".box").show();
    });
    $("#radio_51").click(function () {
        $(".box").hide();
    });
});	
</script>
@endsection