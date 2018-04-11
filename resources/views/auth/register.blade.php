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
						<form id="sign_up" method="POST" class="form-horizontal">
							<div class="msg">Pendaftaran Akun Wajib Pajak</div>
							{{-- <div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Jenis Wajib Pajak<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<input name="jenis_wajib_pajak" type="radio" id="radio_3" class="with-gap"/>
										<label for="radio_3">Perorangan</label>
										<input name="jenis_wajib_pajak" type="radio" id="radio_4" class="with-gap" />
										<label for="radio_4">Badan Usaha</label>									
									</div>
								</div>
							</div> --}}
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nomor Induk Kependudukan (NIK)<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="nik" class="form-control" placeholder="NIK" required>
										</div>
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
											<input type="text" id="npwp" class="form-control" placeholder="NPWP" required>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
									<label for="">Nama Lengkap<small>*</small></label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="nama_depan" class="form-control" placeholder="NAMA DEPAN" disabled>
										</div>
										<div class="form-line">
											<input type="text" id="nama_depan" class="form-control" placeholder="NAMA TENGAH" disabled>
										</div>
										<div class="form-line">
											<input type="text" id="nama_depan" class="form-control" placeholder="NAMA AKHIR" disabled>
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
											<textarea rows="4" class="form-control no-resize" placeholder="Alamat" disabled></textarea>
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
											<input type="text" id="rt" class="form-control" placeholder="RT" disabled>
										</div>
 									</div>
								</div>
								<div class="col-md-1 col-sm-1 col-xs-2 form-control-label">
									<label for="">RW<small>*</small></label>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-3">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="rw" class="form-control" placeholder="RW" disabled>
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
											<input type="text" id="kode_pos" class="form-control" placeholder="Kode POS" disabled>
										</div>
 									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
									<label for="">Provinsi<small>*</small></label>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="provinsi" class="form-control" placeholder="Provinsi" disabled>
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
											<input type="text" id="kota-kab" class="form-control" placeholder="Kota/Kab" disabled>
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
											<input type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" disabled>
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
											<input type="text" id="kelurahan" class="form-control" placeholder="Kelurahan" disabled>
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
											<input type="text" id="notelp" class="form-control" placeholder="Nomor Telepon">
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
											<input type="text" id="nohp" class="form-control" placeholder="Nomor Handphone">
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
											<input type="text" id="email" class="form-control" placeholder="Alamat Email">
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
											<input type="text" id="password" class="form-control" placeholder="Password">
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
											<input type="text" id="password" class="form-control" placeholder="Konfirmasi Password">
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

							<a href="{{ route('regis-sukses') }}" class="btn btn-block btn-lg bg-pink waves-effect">DAFTAR</a>

							<div class="m-t-25 m-b--5 align-center">
								<a href="{{ route('login') }}">Sudah Punya Akun?</a>
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
    <script src="{{ asset('js/pages/examples/sign-up.js') }}"></script>

</body>

</html>