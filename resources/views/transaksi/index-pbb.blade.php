@extends('layout.master')

@section('title')
<title>Pembayaran Pajak PBB</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li class="active">Transaksi Pembayaran PBB</li>
</ol>


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>PEMBAYARAN PAJAK PBB</h2>
            </div>
            <div class="body">
                <form id="wizard_with_validation" method="POST" class="form-horizontal">
                    <h3>Data Pajak PBB</h3>
                    <fieldset>
                        
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Nomor Objek Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>31709xxxxxxxxx63476</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Nama</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Fikri Reza</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Alamat</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Jl. Surabaya RT.11 RW.09 No. 33 Menteng</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Tahun Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>2018</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Total Tagihan</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Rp. 1.902.020,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Biaya Admin</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Rp. 2.500,-</p>
                            </div>
						</div>
						<div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jumlah Pembayaran</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Rp. 1.904.520,-</p>
                            </div>
                        </div>
                        <h4>Detail Tagihan</h4>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jumlah Pokok</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 1.902.020,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jumlah Bunga</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 0,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jumlah Denda</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 0,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jumlah Sanksi</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 0,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Total</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 1.904.520,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Terbilang</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">SATU JUTA SEMBILAN RATUS EMPAT RIBU LIMA RATUS DUA PULUH RUPIAH</p>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Metode Pembayaran</h3>
                    <fieldset>
						<h4>Virtual Account</h4>
						<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingOne_1">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">BCA VIRTUAL ACCOUNT</a>
									</h4>
								</div>
								<div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
									<div class="panel-body">
										<p class="font-bold">ATM BCA</p>
										<p>1. Masukkan Kartu ATM BCA & PIN</p>
										<p>2. Pilih menu Transaksi Lainnya > Transfer > ke Rekening BCA Virtual Account</p>
										<p>3. Masukkan 5 angka kode perusahaan untuk TaxPayer (80777) dan Nomor HP yang terdaftar di akun TaxPayer Anda (Contoh: 80777085694965855)</p>
										<p>4. Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</p>
										<p>5. Masukkan Jumlah Transfer sesuai dengan Total Tagihan</p>
										<p>6. Ikuti instruksi untuk menyelesaikan transaksi</p>
										<p>7. Simpan struk transaksi sebagai bukti pembayaran</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingTwo_1">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false" aria-controls="collapseTwo_1"> MANDIRI VIRTUAL ACCOUNT </a>
									</h4>
								</div>
								<div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
									<div class="panel-body">
										<p class="font-bold">ATM MANDIRI</p>
										<p>1. Masukkan Kartu ATM MANDIRI & PIN</p>
										<p>2. Pilih menu Transaksi Lainnya > Transfer > ke Rekening MANDIRI Virtual Account</p>
										<p>3. Masukkan 5 angka kode perusahaan untuk TaxPayer (80777) dan Nomor HP yang terdaftar di akun TaxPayer Anda (Contoh: 80777085694965855)</p>
										<p>4. Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</p>
										<p>5. Masukkan Jumlah Transfer sesuai dengan Total Tagihan</p>
										<p>6. Ikuti instruksi untuk menyelesaikan transaksi</p>
										<p>7. Simpan struk transaksi sebagai bukti pembayaran</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingThree_1">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false" aria-controls="collapseThree_1"> BRIVA </a>
									</h4>
								</div>
								<div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
									<div class="panel-body">
										<p class="font-bold">ATM BRIVA</p>
										<p>1. Masukkan Kartu ATM BRIVA & PIN</p>
										<p>2. Pilih menu Transaksi Lainnya > Transfer > ke Rekening BRIVA</p>
										<p>3. Masukkan 5 angka kode perusahaan untuk TaxPayer (80777) dan Nomor HP yang terdaftar di akun TaxPayer Anda (Contoh: 80777085694965855)</p>
										<p>4. Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</p>
										<p>5. Masukkan Jumlah Transfer sesuai dengan Total Tagihan</p>
										<p>6. Ikuti instruksi untuk menyelesaikan transaksi</p>
										<p>7. Simpan struk transaksi sebagai bukti pembayaran</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingFour_1">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false" aria-controls="collapseFour_1"> BNI VIRTUAL ACCOUNT </a>
									</h4>
								</div>
								<div id="collapseFour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
									<div class="panel-body">
										<p class="font-bold">ATM BNI</p>
										<p>1. Masukkan Kartu ATM BNI & PIN</p>
										<p>2. Pilih menu Transaksi Lainnya > Transfer > ke Rekening BNI Virtual Account</p>
										<p>3. Masukkan 5 angka kode perusahaan untuk TaxPayer (80777) dan Nomor HP yang terdaftar di akun TaxPayer Anda (Contoh: 80777085694965855)</p>
										<p>4. Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</p>
										<p>5. Masukkan Jumlah Transfer sesuai dengan Total Tagihan</p>
										<p>6. Ikuti instruksi untuk menyelesaikan transaksi</p>
										<p>7. Simpan struk transaksi sebagai bukti pembayaran</p>
									</div>
								</div>
							</div>
							<h4>Transfer Bank</h4>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingOne_2">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_2" aria-expanded="true" aria-controls="collapseOne_2">BANK DAERAH</a>
									</h4>
								</div>
								<div id="collapseOne_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_2">
									<div class="panel-body">
										<p class="font-bold">BANK DAERAH</p>
										<p>Cabang Bank Daerah</p>
										<p>Nomor rekening: 178 303 7878</p>
										<p>Atas Nama: PENERIMAAN PAJAK DAERAH</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingTwo_2">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_2" aria-expanded="false" aria-controls="collapseTwo_2"> BANK BCA </a>
									</h4>
								</div>
								<div id="collapseTwo_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_2">
									<div class="panel-body">
										<p class="font-bold">BANK BCA</p>
										<p>Cabang Bank BCA</p>
										<p>Nomor rekening: 6372 8377 8278</p>
										<p>Atas Nama: PENERIMAAN PAJAK DAERAH</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingThree_3">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_3" aria-expanded="false" aria-controls="collapseThree_3"> BANK MANDIRI </a>
									</h4>
								</div>
								<div id="collapseThree_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_3">
									<div class="panel-body">
										<p class="font-bold">BANK MANDIRI</p>
										<p>Cabang Bank Mandiri</p>
										<p>Nomor rekening: 15500009237786</p>
										<p>Atas Nama: PENERIMAAN PAJAK DAERAH</p>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading" role="tab" id="headingFour_4">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_4" aria-expanded="false" aria-controls="collapseFour_4"> BANK BNI </a>
									</h4>
								</div>
								<div id="collapseFour_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_4">
									<div class="panel-body">
										<p class="font-bold">BANK BNI</p>
										<p>Cabang Bank BNI</p>
										<p>Nomor rekening: 009378 93287 8278</p>
										<p>Atas Nama: PENERIMAAN PAJAK DAERAH</p>
									</div>
								</div>
							</div>
						</div>

                    </fieldset>

                    <h3>Konfirmasi Pembayaran</h3>
                    <fieldset>
						<h4>Total Tagihan Rp. 1.904.520,-</h4>
						<a href="#detil_tagihan" class="list-group-item" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="detil_tagihan">Detil Tagihan</a>
						<div class="collapse" id="detil_tagihan">
							<div class="well">
								<p class="font-bold"></p>
								<p>Jumlah Tagihan : Rp. 1.902.020,-</p>
								<p>Biaya Admin : Rp. 2.500,-</p>
								<p>Total Pembayaran : <u><b>Rp. 1.904.520,-</b></u></p>
							</div>
						</div>

						<div class="list-group">
							<a href="#va_bca" class="list-group-item" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="va_bca">BCA VIRTUAL ACCOUNT</a>
							<div class="">
								<div class="well">
									<p class="font-bold">Periksa Kembali Data Pembayaran Anda Sebelum Melanjutkan Transaksi.</p>
									<p class="font-bold">Anda akan mendapatkan kode pembayaran BCA Virtual Account yang akan digunakan untuk membayar transaksi ini di berbagai channel pembayaran BCA.</p>
								</div>
							</div>
						</div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('bottomscript')
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<script>
$(function () {
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            swal("Pembayaran Sukses!", "Cek Email Anda!", "success");
            window.setTimeout(function(){ window.location.href = "{{ route('bukti-pembayaran-pbb') }}"; }, 3000);
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
});

function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
}
</script>

@endsection