@extends('layout.master')

@section('title')
<title>Pembayaran PBB</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li class="active">Pembayaran Pajak PBB</li>
</ol>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>TERIMA KASIH</h2>
            </div>
            <div class="body">
                <h4 class="align-center">Menunggu Pembayaran</h4>
                <p class="align-center font-bold">Mohon selesaikan pembayaran Anda sebelum tanggal 16 April 2018 11:26 WIB dengan rincian sebagai berikut.</p>
                <br><br>
                <p class="align-center">Kode Unik Pembayaran</p>
                <p class="align-center font-bold">80777081878782424</p> 
                <br><br>
                <p class="align-center">Jumlah Yang Harus Dibayar</p>
                <p class="align-center font-bold">Rp. 1.902.020,-</p>
                <br>
                <p class="align-center">Pembayaran akan otomatis dibatalkan apabila Anda tidak melakukan pembayaran lebih dari 1 hari setelah kode pembayaran diberikan.</p>

                <br>
                <p class="align-center font-bold">Cara Pembayaran</p>
                <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne_1">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                    ATM BCA
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                            <div class="panel-body">
                                <p>1 Masukkan Kartu ATM BCA & PIN</p>
                                <p>2 Pilih menu Transaksi Lainnya > Transfer > ke Rekening BCA Virtual Account</p>
                                <p>3 Masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777085694965855)</p>
                                <p>4 Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</p>
                                <p>5 Masukkan Jumlah Transfer sesuai dengan Total Tagihan</p>
                                <p>6 Ikuti instruksi untuk menyelesaikan transaksi</p>
                                <p>7 Simpan struk transaksi sebagai bukti pembayaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo_1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false" aria-controls="collapseTwo_1"> M-BCA </a>
                            </h4>
                        </div>
                        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                            <div class="panel-body">
                                <p>1 Lakukan log in pada aplikasi BCA Mobile</p>
                                <p>2 Pilih menu m-BCA, kemudian masukkan kode akses m-BCA</p>
                                <p>3 Pilih m-Transfer > BCA Virtual Account</p>
                                <p>4 Pilih dari Daftar Transfer, atau masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777085694965855)</p>
                                <p>5 Masukkan jumlah yang ingin dibayarkan</p>
                                <p>6 Masukkan pin m-BCA</p>
                                <p>7 Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti pembayaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree_1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false" aria-controls="collapseThree_1"> KlikBCA </a>
                            </h4>
                        </div>
                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                            <div class="panel-body">
                                <p>1 Lakukan log in pada aplikasi KlikBCA Individual (https://ibank.klikbca.com/)</p>
                                <p>2 Masukkan User ID dan PIN</p>
                                <p>3 Pilih Transfer Dana > Transfer ke BCA Virtual Account</p>
                                <p>4 Masukkan nomor BCA Virtual Account (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 80777085694965855)</p>
                                <p>5 Masukkan jumlah yang ingin dibayarkan</p>
                                <p>6 Validasi pembayaran</p>
                                <p>7 Cetak nomor referensi sebagai bukti transaksi Anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour_1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false" aria-controls="collapseFour_1"> Kantor Bank BCA </a>
                            </h4>
                        </div>
                        <div id="collapseFour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
                            <div class="panel-body">
                                <p>1 Ambil nomor antrian transaksi Teller dan isi slip setoran</p>
                                <p>2 Serahkan slip dan jumlah setoran kepada Teller BCA</p>
                                <p>3 Teller BCA akan melakukan validasi transaksi</p>
                                <p>4 Simpan slip setoran hasil validasi sebagai bukti pembayaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection