@extends('layout.master')

@section('title')
<title>Tambah Objek Pajak PBB</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="row clear-fix">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{ route('beranda') }}">Beranda</a></li>
			<li><a href="{{ route('pendaftaran-pbb') }}">Daftar PBB</a></li>			
			<li class="active">Form Pendaftaran PBB</li>
		</ol>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-right"></div>
</div>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>FORM PENDAFTARAN OBJEK PAJAK DAERAH - PAJAK BUMI & BANGUNAN</h2>
			</div>
			<div class="body">
				<form class="form-horizontal" id="form_validation" method="POST" action="#">
					{{ csrf_field() }}
					<h2 class="card-inside-title">I. Data Letak Objek Pajak</h2>
					
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Nama Jalan</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama_jalan" class="form-control" placeholder="Nama Jalan Objek Pajak" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Blok/ Kav/ Nomor</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="blok" class="form-control" placeholder="Blok/ Kav/ Nomor" required>
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
							<label for="">Kecamatan</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<select class="form-control show-tick" name="kecamatan" data-live-search="true" required>
										<option value="">-- Pilih Kecamatan --</option>
										<option value="10">KUTA</option>
										<option value="20">MENGWI</option>
										<option value="30">ABIANSEMAL</option>
										<option value="40">PETANG</option>
										<option value="50">KUTA SELATAN</option>
										<option value="60">KUTA UTARA</option>
									</select>
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
										<option value="10.1">TUBAN</option>
										<option value="10.2">KEDONGANAN</option>
										<option value="10.3">KUTA</option>
										<option value="10.4">LEGIAN</option>
										<option value="10.5">SEMINYAK</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<h2 class="card-inside-title">II. Data Subjek Pajak</h2>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">NIK</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="number" name="nik" class="form-control" placeholder="NIK" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Status</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="status" type="radio" id="radio_30" class="with-gap radio-col-red" />
								<label for="radio_30">Pemilik</label>
								<input name="status" type="radio" id="radio_31" class="with-gap radio-col-red" />
								<label for="radio_31">Penyewa</label>
								<input name="status" type="radio" id="radio_32" class="with-gap radio-col-red" />
								<label for="radio_32">Pengelola</label>
								<input name="status" type="radio" id="radio_33" class="with-gap radio-col-red" />
								<label for="radio_33">Pemakai</label>
								<input name="status" type="radio" id="radio_34" class="with-gap radio-col-red" />
								<label for="radio_34">Sengketa</label>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Pekerjaan</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="pekerjaan" type="radio" id="radio_35" class="with-gap radio-col-red" />
								<label for="radio_35">PNS *)</label>
								<input name="pekerjaan" type="radio" id="radio_36" class="with-gap radio-col-red" />
								<label for="radio_36">TNI/POLRI *)</label>
								<input name="pekerjaan" type="radio" id="radio_37" class="with-gap radio-col-red" />
								<label for="radio_37">Pensiunan</label>
								<input name="pekerjaan" type="radio" id="radio_38" class="with-gap radio-col-red" />
								<label for="radio_38">Badan</label>
								<input name="pekerjaan" type="radio" id="radio_39" class="with-gap radio-col-red" />
								<label for="radio_39">lainnya</label><br>
								<span><h6>Catatan : *) yang penghasilannya semata-mata berasal dari gaji atau uang pensiun</h6></span>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Nama Subjek Pajak</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama_subjek_pajak" class="form-control" placeholder="Nama Subjek Pajak" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">NPWP</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="number" name="NPWP" class="form-control" placeholder="NPWP" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Nama Jalan</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama_jalan_1" class="form-control" placeholder="Nama Jalan" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Blok/ Kav/ Nomor</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="blok_1" class="form-control" placeholder="Blok/ Kav/ Nomor" required>
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
									<input type="number" name="rt_1" class="form-control" placeholder="RT" required>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">RW</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="number" name="rw_1" class="form-control" placeholder="RW" required>
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
										<option value="01">Kab. Jembrana</option>
										<option value="02">Kab. Tabanan</option>
										<option value="03">Kab. Badung</option>
										<option value="04">Kab. Gianyar</option>
										<option value="05">Kab. Klungkung</option>
										<option value="06">Kab. Bangli</option>
										<option value="07">Kab. Karangasem</option>
										<option value="08">Kab. Buleleng</option>
										<option value="71">Kota Denpasar</option>
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
										<option value="10">KUTA</option>
										<option value="20">MENGWI</option>
										<option value="30">ABIANSEMAL</option>
										<option value="40">PETANG</option>
										<option value="50">KUTA SELATAN</option>
										<option value="60">KUTA UTARA</option>
									</select>
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
										<option value="10.1">TUBAN</option>
										<option value="10.2">KEDONGANAN</option>
										<option value="10.3">KUTA</option>
										<option value="10.4">LEGIAN</option>
										<option value="10.5">SEMINYAK</option>
									</select>
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
								<div class="input-group">
									<div class="col-md-2">
										<input type="text" class="form-control" value="xx.xx.xxx.xxx. ">
									</div>
									<div class="col-md-2">
										<div class="form-line" id="demo">
											<input type="number" maxlength="3" length="3" class="form-control" placeholder="xxx">
										</div>
									</div>
									<div class="col-md-3">
										<small>Belum Memiliki NPWPD, buat <a onclick="myFunction()">disini</a></small>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">No Telepon</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="number" name="no_telp" class="form-control" placeholder="No Telepon" required>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Email</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<div class="form-line">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
							</div>
						</div>
					</div>

					<h2 class="card-inside-title">III. Data Tanah</h2>
					
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Luas Tanah</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="number" name="luas_tanah" class="form-control" placeholder="Luas Tanah" required>
									</div>
									<span class="input-group-addon">M<sup>2</sup></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
							<label for="">Jenis Tanah</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="jenis_tanah" type="radio" id="radio_40" class="with-gap radio-col-red" />
								<label for="radio_40">Tanah + Bangunan</label>
								<input name="jenis_tanah" type="radio" id="radio_41" class="with-gap radio-col-red" />
								<label for="radio_41">Kavling Siap Bangun</label>
								<input name="jenis_tanah" type="radio" id="radio_42" class="with-gap radio-col-red" />
								<label for="radio_42">Tanah Kosong</label>
								<input name="jenis_tanah" type="radio" id="radio_43" class="with-gap radio-col-red" />
								<label for="radio_43">Fasilitas Umum</label>
								<input name="jenis_tanah" type="radio" id="radio_44" class="with-gap radio-col-red" />
								<label for="radio_44">Tanah Perairan</label><br>
							</div>
						</div>
					</div>

					<h2 class="card-inside-title">III. Data Bangunan</h2>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Jumlah Bangunan</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<div class="form-group">
								<div class="input-group">
									<div class="form-line">
										<input type="number" name="jumlah_bangunan" placeholder="Jumlah Bangunan" class="form-control" placeholder="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<h2 class="card-inside-title">IV. Pernyataan Subjek Pajak</h2>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">Syarat dan Ketentuan</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<textarea rows="7" id="s_d_k" class="form-control" readonly>Saya menyatakan bahwa informasi yang telah saya berikan dalam formulir ini termasuk lampirannya adalah benar, jelas dan lengkap menurut keadaan yang sebenarnya.
- Dalam hal bertindak selaku kuasa Surat Kuasa harap dilampirkan 
- Dalam hal subjek pajak mendaftarkan sendiri Objek pajak, supaya menggambarkan sket/denah lokasi objek pajak 
- Batas waktu pengembalian SPOP 30 (tiga puluh) hari sejak diterima oleh Subjek Pajak sesuai Perda Nomor 6 Tahun 2011 tentang Ketentuan Umum Pajak Daerah.</textarea>
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
            'status': {
                required: true
			},
			'pekerjaan': {
                required: true
			},
			'jenis_tanah': {
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
});	
</script>

<script>
	function myFunction() {
		document.getElementById("demo").innerHTML = Math.floor((Math.random() * 999) + 100);
	}
</script>
@endsection