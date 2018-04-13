@extends('layout.master')

@section('title')
<title>Tambah Objek Pajak Restoran</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
	<li><a href="{{ route('pendaftaran-restoran') }}">Pendaftaran Restoran</a></li>
	<li class="active">Form Pendaftaran Restoran</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>FORM PENDAFTARAN OBJEK PAJAK DAERAH - PAJAK RESTORAN</h2>
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
							<label for="">Nama Restoran</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama_restoran" class="form-control" placeholder="Nama Restoran" required>
								</div>
							</div>
						</div>
					</div>
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
							<label for="">Jenis Masakan Utama</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="jenis_masakan" type="radio" id="radio_30" class="with-gap radio-col-red" />
                                <label for="radio_30">Masakan Indonesia</label>&nbsp;
                                <input name="jenis_masakan" type="radio" id="radio_31" class="with-gap radio-col-red" />
                                <label for="radio_31">Fast Food</label>&nbsp;
                                <input name="jenis_masakan" type="radio" id="radio_32" class="with-gap radio-col-red" />
                                <label for="radio_32">Sea Food</label>&nbsp;
                                <input name="jenis_masakan" type="radio" id="radio_33" class="with-gap radio-col-red" />
                                <label for="radio_33">Masakan Padang</label>&nbsp;
                                <input name="jenis_masakan" type="radio" id="radio_34" class="with-gap radio-col-red" />
                                <label for="radio_34">Masakan Amerika/Eropa</label>&nbsp;
                                <input name="jenis_masakan" type="radio" id="radio_35" class="with-gap radio-col-red" />
                                <label for="radio_35">Chinese/ Japanesse/ Korean Food</label>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Luas Tanah</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="number" class="form-control" name="luas_tanah" placeholder="Luas Tanah" required>
									</div>
									<span class="input-group-addon">M<sup>2</sup></span>
								</div>
							</div>
						</div>
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
							<label for="">Status Kepemilikan Tempat Usaha</label>
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
							<label for="">Jam Operasi</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">access_time</i>
								</span>
								<div class="form-line">
									<input type="text" class="form-control time24" placeholder="Ex: 23:59" required>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">s/d</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">access_time</i>
								</span>
								<div class="form-line">
									<input type="text" class="form-control time24" placeholder="Ex: 23:59" required>
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
									Type
								</span>
								<div class="form-line">
									<input type="text" name="type" class="form-control" placeholder="Type" required>
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
							<label for="">Fasilitas Penunjang</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_21" class="filled-in chk-col-red" />
                                <label for="md_checkbox_21">Ruang Pertemuan</label>&nbsp;
                                <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_22" class="filled-in chk-col-red" />
                                <label for="md_checkbox_22">Musik Hidup</label>&nbsp;
                                <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_23" class="filled-in chk-col-red" />
                                <label for="md_checkbox_23">Private Room</label>&nbsp;
                                <input type="checkbox" name="fasilitas_penunjang" id="md_checkbox_24" class="filled-in chk-col-red" />
                                <label for="md_checkbox_24">Lainnya</label>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Jumlah Meja</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="number" name="jumlah_meja" class="form-control" placeholder="Jumlah Meja" required>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Jumlah Kursi</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="number" name="jumlah_kursi" class="form-control" placeholder="Jumlah Kursi" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Fasilitas Parkir</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<input name="parkir" type="radio" id="radio_36" class="with-gap radio-col-red"/>
								<label for="radio_36" value="ada">Ada</label>
								<input name="parkir" type="radio" id="radio_37" class="with-gap radio-col-red" />
								<label for="radio_37" value="tidak">Tidak Ada</label>
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
										<input type="number" class="form-control" placeholder="" required>
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
										<input type="number" class="form-control" placeholder="" required>
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
									<input name="bayaran" type="radio" id="radio_38" class="with-gap radio-col-red"/>
									<label for="radio_38">Ya</label>
									<input name="bayaran" type="radio" id="radio_39" class="with-gap radio-col-red" />
									<label for="radio_39">Tidak</label>
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
								<textarea rows="3" id="password_2" class="form-control" readonly>Dengan menyadari sepenuhnya akan segala akibat termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan yang berlaku, saya menyatakan bahwa apa yang telah saya beri tahukan di atas, beserta lampiran-lampirannya adalah benar dan lengkap.</textarea>
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
$(document).ready(function () {
	
	$('#form_validation').validate({
		rules: {
            'status_usaha': {
                required: true
			},
			'jenis_masakan': {
                required: true
			},
			'stt_tempat_usaha': {
                required: true
			},
			'bukti_bayar': {
                required: true
			},
			'parkir': {
                required: true
			},
			'bayaran': {
                required: true
			},
			'fasilitas_penunjang': {
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
    $("#radio_36").click(function () {
        $(".box").show();
    });
    $("#radio_37").click(function () {
        $(".box").hide();
    });
});
</script>
@endsection