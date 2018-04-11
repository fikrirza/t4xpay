@extends('layout.master')

@section('title')
<title>Pembayaran Pajak</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li class="active">Transaksi Pembayaran</li>
</ol>


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>PEMBAYARAN PAJAK RESTORAN</h2>
            </div>
            <div class="body">
                <form id="wizard_with_validation" method="POST" class="form-horizontal">
                    <h3>Data Pajak Restoran</h3>
                    <fieldset>
                        <h4>Data Wajib Pajak</h4>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">NIK</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>31740523232323000</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Nama</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Mawar</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Alamat</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Jl. Suka Maju Barat II</p>
                            </div>
                        </div>
                        <h4>Data Objek Pajak</h4>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Jenis Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Pajak Restoran</p>
                            </div>
                        </div>
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
                                <p class="font-bold align-right">Nama Objek Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Restoran 2</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Alamat Objek Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>Jl. Surabaya No. 33 Menteng</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">NPWP</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>317.09xxx.xxxx.xx6-3476</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Masa Pajak</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p>MARET</p>
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
                        <h4>Jumlah Yang Harus Dibayar</h4>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Pokok</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 890.000,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Bunga</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 0,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Denda</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">Rp. 0,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Sanksi</p>
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
                                <p class="align-right">Rp. 890.000,-</p>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                <p class="font-bold align-right">Terbilang</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 form-control-label">
                                <p class="align-right">DELAPAN RATUS SEMBILAN PULUH RIBU RUPIAH</p>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Metode Pembayaran</h3>
                    <fieldset>
                        <h4>Transfer Bank</h4>
                        <div class="list-group">
                            <a class="list-group-item" role="button" data-toggle="collapse" href="#tf_bank_daerah" aria-expanded="false" aria-controls="tf_bank_daerah">BANK DAERAH</a>
                            <div class="collapse" id="tf_bank_daerah">
                                <div class="well">
                                    <p class="font-bold">BANK DAERAH</p>
                                    <p>Cabang Bank Daerah</p>
                                    <p>Nomor rekening: 178 303 7878</p>
                                    <p>Atas Nama: PENERIMAAN PAJAK DAERAH</p>
                                </div>
                            </div>
                            <a href="#tf_bank_bca" onclick="toggle_visibility('tf_bank_bca');" class="list-group-item">BANK BCA</a>
                            <a href="#tf_bank_mandiri" onclick="toggle_visibility('tf_bank_mandiri');" class="list-group-item">BANK MANDIRI</a>
                            <a href="#tf_bank_bni" onclick="toggle_visibility('tf_bank_bni');" class="list-group-item">BANK BNI</a>
                            <a href="#tf_bank_bri" onclick="toggle_visibility('tf_bank_bri');" class="list-group-item">BANK BRI</a>
                        </div>

                        <h4>Virtual Account</h4>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item">BCA VIRTUAL ACCOUNT</a>
                            <a href="javascript:void(0);" class="list-group-item">MANDIRI VIRTUAL ACCOUNT</a>
                            <a href="javascript:void(0);" class="list-group-item">BRIVA</a>
                            <a href="javascript:void(0);" class="list-group-item">BNI VIRTUAL ACCOUNT</a>
                        </div>
                    </fieldset>

                    <h3>Konfirmasi Pembayaran</h3>
                    <fieldset>


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
            window.setTimeout(function(){ window.location.href = "{{ route('bukti-pembayaran') }}"; }, 3000);
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