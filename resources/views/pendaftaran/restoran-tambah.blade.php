@extends('layout.master')

@section('title')
<title>Tambah Objek Pajak Restoran</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="block-header">
	<h2>FORM PENDAFTARAN RESTORAN</h2>
</div>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					FORM PENDAFTARAN OBJEK PAJAK DAERAH - PAJAK RESTORAN
				</h2>
			</div>
			<div class="body">
				<form class="form-horizontal">
					<h2 class="card-inside-title">I. Data Objek Pajak</h2>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Nama Objek Pajak</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="nama_objek_pajak" class="form-control" placeholder="Nama Objek Pajak">
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
									<textarea id="password_2" class="form-control" placeholder="Alamat objek pajak"></textarea>
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
									<input type="text" id="rt" class="form-control" placeholder="RT">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">RW</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="RW">
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
									<select class="form-control show-tick" data-live-search="true">
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
									<select class="form-control show-tick" data-live-search="true">
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
									<select class="form-control show-tick" data-live-search="true">
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
									<input type="text" id="nomor_telepon" class="form-control" placeholder="Nomor Telepon">
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
									<input type="text" id="tmt_operasi" class="form-control" placeholder="TMT Operasi">
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
									<input type="text" id="nop_pbb" class="form-control" placeholder="NOP PBB">
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
									<input type="text" id="nama_badan_hukum" class="form-control" placeholder="Nama Badan Hukum">
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
									<input type="text" id="nik_npwp" class="form-control" placeholder="NIK/NPWP">
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
									<input type="text" id="npwpd" class="form-control" placeholder="NPWPD">
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
							<label for="">Jenis Masakan Utama</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="jenis_masakan" type="radio" id="radio_30" class="with-gap radio-col-red" />
                                <label for="radio_30">Masakan Indonesia</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_31" class="with-gap radio-col-red" />
                                <label for="radio_31">Fast Food</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_32" class="with-gap radio-col-red" />
                                <label for="radio_32">Sea Food</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_33" class="with-gap radio-col-red" />
                                <label for="radio_33">Masakan Padang</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_34" class="with-gap radio-col-red" />
                                <label for="radio_34">Masakan Amerika/Eropa</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_35" class="with-gap radio-col-red" />
                                <label for="radio_35">Chinese/ Japanesse/ Korean Food</label>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Luas Tanah</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="">
									</div>
									<span class="input-group-addon">M<sup>2</sup></span>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Luas Bangunan</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="">
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
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="">
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
								<input name="group5" type="radio" id="radio_47" class="with-gap radio-col-red" />
                                <label for="radio_47">Milik Sendiri</label><br>
                                <input name="group5" type="radio" id="radio_48" class="with-gap radio-col-red" />
                                <label for="radio_48">Sewa/Kontrak</label><br>
                                <input name="group5" type="radio" id="radio_49" class="with-gap radio-col-red" />
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
									<input type="text" class="form-control time24" placeholder="Ex: 23:59">
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
									<input type="text" class="form-control time24" placeholder="Ex: 23:59">
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
								<input name="group4" type="radio" id="radio_45" class="with-gap radio-col-red" />
                                <label for="radio_45">Bon/Bill</label><br>
                                <input name="group4" type="radio" id="radio_46" class="with-gap radio-col-red" />
                                <label for="radio_46">Struk/Kas Register</label><br>
								<input name="group4" type="radio" id="radio_44" class="with-gap radio-col-red" />
                                <label for="radio_44">Lainnya</label><br>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Alat Transaksi</label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
							<div class="input-group">
								<span class="input-group-addon">
									Merk
								</span>
								<div class="form-line">
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for=""></label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
							<div class="input-group">
								<span class="input-group-addon">
									Type
								</span>
								<div class="form-line">
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for=""></label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
							<div class="input-group">
								<span class="input-group-addon">
									Jumlah
								</span>
								<div class="form-line">
									<input type="text" class="form-control" placeholder="">
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
								<input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" />
                                <label for="md_checkbox_21">Ruang Pertemuan</label><br>
                                <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                <label for="md_checkbox_22">Musik Hidup</label><br>
                                <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-red" />
                                <label for="md_checkbox_23">Private Room</label><br>
                                <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-red" />
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
										<input type="text" class="form-control" placeholder="">
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
										<input type="text" class="form-control" placeholder="">
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
								<label for="radio_36">Ada</label>
								<input name="parkir" type="radio" id="radio_37" class="with-gap radio-col-red" />
								<label for="radio_37">Tidak Ada</label>
							</div>
						</div>
					</div>
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
									<input type="text" class="form-control" placeholder="">
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
									<input type="text" class="form-control" placeholder="">
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
									<input type="text" id="pengelola" class="form-control" placeholder="Pengelola Parkir">
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
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
							<label for="">Jenis Perizinan</label>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3 form-control-label">
							<label for="">a. Izin Pariwisata Nomor</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-3 form-control-label">
							<label for="">Masa berlaku</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3 form-control-label">
							<label for="">b. Izin Undang-undang Gangguan</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 form-control-label">
							<label for="">Masa berlaku</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3 form-control-label">
							<label for="">c. Izin Sumur Bor</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 form-control-label">
							<label for="">Masa berlaku</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3 form-control-label">
							<label for="">d. Izin Mengelola Parkir</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 form-control-label">
							<label for="">Masa berlaku</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3 form-control-label">
							<label for="">e. Izin Reklame</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 form-control-label">
							<label for="">Masa berlaku</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="rt" class="form-control" placeholder="">
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
								<div class="form-line">
									<textarea rows="3" id="password_2" class="form-control" readonly>Dengan menyadari sepenuhnya akan segala akibat termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan yang berlaku, saya menyatakan bahwa apa yang telah saya beri tahukan di atas, beserta lampiran-lampirannya adalah benar dan lengkap.</textarea>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="row clearfix">
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
							<button type="button" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('bottomscript')
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<script>
$(function () {
	var $demoMaskedInput = $('.demo-masked-input');
	
	$demoMaskedInput.find('.time24').inputmask('hh:mm', { placeholder: '__:__ _m', alias: 'time24', hourFormat: '24' });
	});
</script>
@endsection