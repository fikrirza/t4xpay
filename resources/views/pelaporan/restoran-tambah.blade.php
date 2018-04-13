@extends('layout.master')

@section('title')
<title>Tambah Pelaporan Pajak Restoran</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li><a href="{{ route('pelaporan-restoran') }}">Daftar Restoran</a></li>
    <li><a href="{{ route('pelaporan-restoran-detil') }}">Detil Pelaporan Restoran</a></li>
	<li class="active">Form Pelaporan Pajak Restoran</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					SURAT PEMBERITAHUAN PAJAK DAERAH (SPTPD) - PAJAK RESTORAN | 31709xxxxxxxxx63476
				</h2>
			</div>
			<div class="body">
				<form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Tahun Pajak</label>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" data-live-search="true">
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
                                    <select class="form-control show-tick" data-live-search="true">
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
									<input type="text" name="nama_objek_pajak" class="form-control" placeholder="Nama Objek Pajak" readonly>
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
									<textarea name="alamat" class="form-control" placeholder="Alamat objek pajak" readonly></textarea>
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
									<input type="number" name="rt" class="form-control" placeholder="RT" readonly>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="">RW</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="number" name="rt" class="form-control" placeholder="RW" readonly>
								</div>
							</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kode Pos</label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="kode_pos" class="form-control" placeholder="Kode Pos" readonly>
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
									<input type="number" name="npwpd" class="form-control" placeholder="NPWPD" readonly>
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
									<input type="number" name="nopd" class="form-control" placeholder="NOPD" readonly>
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
									<input type="text" id="nop_pbb" class="form-control" placeholder="Nama Objek/Usaha (auto)" readonly>
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
                                    <textarea id="password_2" class="form-control" placeholder="Alamat objek pajak (auto)" readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<h2 class="card-inside-title">II. Diisi Oleh Pengusaha Restoran</h2>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
							<label for="">Klasifikasi Usaha</label>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
							<div class="form-group">
								<input name="jenis_masakan" type="radio" id="radio_30" class="with-gap radio-col-red" />
                                <label for="radio_30">Restoran</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_31" class="with-gap radio-col-red" />
                                <label for="radio_31">Kafe</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_32" class="with-gap radio-col-red" />
                                <label for="radio_32">Kantin/ Kafetaria/ Warung Makan</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_33" class="with-gap radio-col-red" />
                                <label for="radio_33">Cepat Saji/ Fast Food</label><br>
                                <input name="jenis_masakan" type="radio" id="radio_34" class="with-gap radio-col-red" />
                                <label for="radio_34">Jasa Boga/ Katering</label>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
							<label for="">Pendapatan dari Makanan Dan Minuman</label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
							<div class="form-group">
								<div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
									<div class="form-line">
										<input type="text" class="form-control" placeholder="123.456.789">
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Pendapatan dari Service Charge</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Pendapatan Lain-lain</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Dasar Pengenaan Pajak ( DPP )</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Pajak Terutang ( 10 % X DPP )</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Pajak Yang Telah Dibayar.</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Pajak Kurang Atau Lebih Bayar.</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp. </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="123.456.789">
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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                            <label for="">Jurnal Harian</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <input name="data_pendukung_4" type="radio" id="radio_26" class="with-gap radio-col-red" />
                                <label for="radio_26">Ada</label>
                                <input name="data_pendukung_4" type="radio" id="radio_27" class="with-gap radio-col-red" />
                                <label for="radio_27">Tidak Ada</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" placeholder="" accept=".pdf, .xlsx">
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
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                            <a href="{{ route('pelaporan-restoran-detil') }}"  class="btn btn-danger m-t-15 waves-effect">KEMBALI</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection