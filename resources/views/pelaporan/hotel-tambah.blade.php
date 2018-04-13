@extends('layout.master')

@section('title')
<title>Tambah Pelaporan Pajak Hotel</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li><a href="{{ route('pelaporan-hotel') }}">Daftar Hotel</a></li>
    <li><a href="{{ route('pelaporan-hotel-detil') }}">Detil Pelaporan Hotel</a></li>
	<li class="active">Form Pelaporan Pajak Hotel</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>SURAT PEMBERITAHUAN PAJAK DAERAH (SPTPD) - PAJAK HOTEL | 31709xxxxxxxxx63476</h2>
			</div>
			<div class="body">
				<form class="form-horizontal" id="form_validation" method="POST">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Tahun Pajak</label>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="tahun" data-live-search="true" required>
                                        <option value="">-- Pilih Tahun --</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Masa Pajak</label>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="bulan" data-live-search="true" required>
                                        <option value="">-- Pilih Bulan --</option>
                                        <option>JANUARI</option>
                                        <option>FEBRUARI</option>
                                        <option>MARET</option>
                                        <option>APRIL</option>
                                        <option>MEI</option>
                                        <option>JUNI</option>
                                        <option>JULI</option>
                                        <option>AGUSTUS</option>
                                        <option>SEPTEMBER</option>
                                        <option>OKTOBER</option>
                                        <option>NOVEMBER</option>
                                        <option>DESEMBER</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="card-inside-title">I. Identitas Wajib Pajak</h2>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Nama Wajib Pajak</label>
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
                                    <textarea name="alamat" class="form-control" placeholder="Alamat wajib pajak" required></textarea>
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
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kode Pos</label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Nama Objek/ Usaha</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nop_pbb" class="form-control" placeholder="Nama Objek/Usaha" required>
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
                                    <textarea name="alamat_objek" class="form-control" placeholder="Alamat objek pajak" required></textarea>
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
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">NOPD</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="nopd" class="form-control" placeholder="NOPD" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="card-inside-title">II. Diisi Oleh Pengusaha Hotel</h2>
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
                                    <input name="klasifikasi_hotel" type="radio" id="radio_29" class="with-gap radio-col-red" />
                                    <label for="radio_29">Motel</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">1) Pembayaran Dari</label>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">a. Persewaan Kamar</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="persewaan_kamar" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">b. Penjualan Makanan & Minuman</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="makan_minum" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">c. Fasilitas Hotel :</label>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Fitness Center</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="fitness" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Health Center</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="health" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Kolam Renang</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="kolam_renang" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Lapangan Tenis</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="lapangan_tenis" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Klub Malam/ Karaoke</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="klub_malam" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Diskotek</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="diskotek" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Pub/ Bar/ Kafe</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="pub_bar_kafe" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Spa</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="spa" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">d. Pelayanan Penunjang :</label>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Telepon</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="telepon" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Faximili</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="fax" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Telex</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="telex" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Internet</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="internet" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Photo Copy</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="potokopi" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Laundry</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="laundry" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Taxi</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="taxi" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">- Service Charge</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="service" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">2) Dasar Pengenaan Pajak (DPP)</label>
                            <span>Jumlah 1 ( a + b + c + d )</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="dpp" class="form-control" placeholder="(auto sum)" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">3) Pajak Terutang ( 10% X DPP )</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="dpp" class="form-control" placeholder="(auto sum)" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">4) Pajak Yang Telah Dibayar</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="pajak_yg_sdh_bayar" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                            <label for="">5) Pajak Kurang/Lebih Bayar 3-4</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="number" name="pajak_kurang_lebih" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="card-inside-title">III. Data Pendukung</h2>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Surat Setoran Pajak Daerah ( SSPD )</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <input name="data_pendukung_1" type="radio" id="radio_20" class="with-gap radio-col-red" />
                                <label for="radio_20">Ada</label>
                                <input name="data_pendukung_1" type="radio" id="radio_21" class="with-gap radio-col-red" />
                                <label for="radio_21">Tidak Ada</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" placeholder="" accept=".pdf, .jpg, .png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Rekapitulasi Penjualan/Omzet.</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <input name="data_pendukung_2" type="radio" id="radio_22" class="with-gap radio-col-red" />
                                <label for="radio_22">Ada</label>
                                <input name="data_pendukung_2" type="radio" id="radio_23" class="with-gap radio-col-red" />
                                <label for="radio_23">Tidak Ada</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" placeholder="" accept=".pdf, .jpg, .png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Rekapitulasi Penggunaan Bon/Bill</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <input name="data_pendukung_3" type="radio" id="radio_24" class="with-gap radio-col-red" />
                                <label for="radio_24">Ada</label>
                                <input name="data_pendukung_3" type="radio" id="radio_25" class="with-gap radio-col-red" />
                                <label for="radio_25">Tidak Ada</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" placeholder="" accept=".pdf, .jpg, .png">
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
								<div class="form-line">
									<textarea rows="3" id="password_2" class="form-control" readonly>Demikian formulir ini diisi dengan sebenar-benarnya dan apabila terdapat ketidak benaran dalam memenuhi kewajiban pengisian SPTPD ini, saya bersedia dikenakan sanksi sesuai dengan Peraturan Daerah yang berlaku.</textarea>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row clearfix">
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                            <a href="{{ route('pelaporan-restoran-detil') }}"  class="btn btn-danger m-t-15 waves-effect">KEMBALI</a>
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