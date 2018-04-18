<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Pendaftaran Akun Wajib Pajak</title>

    <link rel="icon" href="../../favicon.ico" type="image/x-icon">


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Pelayanan <b>PAJAK</b></a>
            <small>Online</small>
        </div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="body">
						<form id="sign_up" method="POST" class="form-horizontal" action="{{ route('registrasi-submit') }}">
							{{ csrf_field() }}
							<div class="msg">Pendaftaran Akun Wajib Pajak</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Jenis Wajib Pajak<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<input name="jenis_wajib_pajak" type="radio" id="radio_3" class="with-gap radio-col-red" value="luar_daerah"/>
										<label for="radio_3">Luar Daerah</label>
										<input name="jenis_wajib_pajak" type="radio" id="radio_4" class="with-gap radio-col-red" value="dalam_daerah"/>
										<label for="radio_4">Dalam Daerah</label>									
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nomor Induk Kependudukan (NIK)<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="number" name="nik" id="nik" class="form-control" placeholder="NIK" required>
										</div>
										<span id="pesanNik" class="col-pink font-bold">NIK Anda Tidak Terdaftar DUKCAPIL</span>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nomor Pokok Wajib Pajak (NPWP)<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="npwp" name="npwp" class="form-control" placeholder="NPWP" required>
										</div>
 									</div>
								</div>
							</div>
							
						<div class="auto">	
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nama Lengkap<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="NAMA DEPAN" readonly>
										</div>
										<div class="form-line">
											<input type="text" id="nama_tengah" name="nama_tengah" class="form-control" placeholder="NAMA TENGAH" readonly>
										</div>
										<div class="form-line">
											<input type="text" id="nama_akhir" name="nama_akhir" class="form-control" placeholder="NAMA AKHIR" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Alamat<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" name="alamat" id="alamat" class="form-control no-resize" placeholder="Alamat" readonly></textarea>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">RT<small>*</small></label>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-2">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="rt" name="rt" class="form-control" placeholder="RT" readonly>
										</div>
 									</div>
								</div>
								<div class="col-md-1 col-sm-1 col-xs-2 form-control-label">
									<label for="">RW<small>*</small></label>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-3">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="rw" name="rw" class="form-control" placeholder="RW" readonly>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kode POS<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Kode POS" readonly>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kota/Kab<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="kota_kab" name="kota_kab" class="form-control" placeholder="Kota/Kab" readonly>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kecamatan<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan" readonly>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kelurahan<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="Kelurahan" readonly>
										</div>
 									</div>
								</div>
							</div>
						</div>

						<div class="manual">	
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nama Lengkap<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="nama_depan" class="form-control" placeholder="NAMA DEPAN">
										</div>
										<div class="form-line">
											<input type="text" name="nama_tengah" class="form-control" placeholder="NAMA TENGAH">
										</div>
										<div class="form-line">
											<input type="text" name="nama_akhir" class="form-control" placeholder="NAMA AKHIR">
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Alamat<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" name="alamat" class="form-control no-resize" placeholder="Alamat"></textarea>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">RT<small>*</small></label>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-2">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="rt" class="form-control" placeholder="RT">
										</div>
 									</div>
								</div>
								<div class="col-md-1 col-sm-1 col-xs-2 form-control-label">
									<label for="">RW<small>*</small></label>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-3">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="rw" class="form-control" placeholder="RW">
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kode POS<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="kode_pos" class="form-control" placeholder="Kode POS">
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kota/kab. Adm</label>
								</div>
								<div class="col-lg-15 col-md-15 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<select class="form-control show-tick" name="kota_kab" data-live-search="true" required>
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
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kecamatan</label>
								</div>
								<div class="col-lg-15 col-md-15 col-sm-5 col-xs-7">
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
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Kelurahan</label>
								</div>
								<div class="col-lg-15 col-md-15 col-sm-5 col-xs-7">
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
						</div>

							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nomor Telp</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="notelp" name="no_telp" class="form-control" placeholder="Nomor Telepon">
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nomor Handphone</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="nohp" name="no_hp" class="form-control" placeholder="Nomor Handphone" required>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Alamat Email<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="email" id="email" name="email" class="form-control" placeholder="Alamat Email" required>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Password<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="password" name="password" class="form-control" placeholder="Password" minlength="6" required>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Konfirmasi Password<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="password" name="c_password" class="form-control" placeholder="Konfirmasi Password" minlength="6" required>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Syarat & Ketentuan<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" class="form-control no-resize" placeholder="Field ini berisikan syarat dan ketentuan dalam menggunakan website ini, pengguna diharapkan untuk menyetujui jika ingin melanjutkan proses pendaftaran dengan check list dibawah." disabled></textarea>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
								
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
										<label for="terms">Saya setuju dengan syarat dan ketentuan diatas.</label>			
 									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-block btn-lg bg-pink waves-effect">DAFTAR</button>

							<div class="m-t-25 m-b--5 align-center">
								<a href="{{ route('login-page') }}">Sudah Punya Akun?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>

	
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>
	<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
	<script src="{{ asset('js/admin.js') }}"></script>

	<script>
	$('.manual').hide();
	$('#pesanNik').hide();

	$(function () {
		$('#sign_up').validate({
			rules: {
				'terms': {
					required: true
				},
				'c_password': {
					equalTo: '[name="password"]'
				}
			},
			highlight: function (input) {
				console.log(input);
				$(input).parents('.form-line').addClass('error');
			},
			unhighlight: function (input) {
				$(input).parents('.form-line').removeClass('error');
			},
			errorPlacement: function (error, element) {
				$(element).parents('.input-group').append(error);
				$(element).parents('.form-group').append(error);
			}
		});
	});

	$(document).ready(function() {
		$('input[name="nik"]').on('change', function() {
			var nik = $(this).val();
			if(nik) {
				$.ajax({
					url: '{{ url('/') }}/registrasi/ceknik/'+nik,
					type: "GET",
					dataType: "json",
					success:function(data) {

						if(data.kosong == 'kosong'){
							console.log(data.kosong);
							$('#pesanNik').show();
							$('.manual').show();
							$('.auto').hide();
						}else{
							console.log(data);
							$('.manual').hide();
							$('#pesanNik').hide();
							$('.auto').show();
							$('input[type="text"]#nama_depan').attr('value', data.nama_depan);
							$('input[type="text"]#nama_tengah').attr('value', data.nama_tengah);
							$('input[type="text"]#nama_akhir').attr('value', data.nama_akhir);
							$('textarea#alamat').attr('value', data.alamat);
							$('input[type="text"]#rt').attr('value', data.rt);
							$('input[type="text"]#rw').attr('value', data.rw);
							$('input[type="text"]#kode_pos').attr('value', data.kode_pos);
							$('input[type="text"]#kota_kab').attr('value', data.kota);
							$('input[type="text"]#kecamatan').attr('value', data.kecamatan);
							$('input[type="text"]#kelurahan').attr('value', data.kelurahan);
						}
					}
				});
			}else{
				$('.manual').hide();
				$('#pesanNik').hide();
				$('.auto').show();
			}
		});
	});
	</script>

</body>

</html>