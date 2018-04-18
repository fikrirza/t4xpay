@extends('layout.master')

@section('title')
<title>Pendaftaran Restoran</title>
@endsection

@section('headscript')
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet">
@endsection


@section('content')

@if(Session::has('berhasil'))
<script>
window.setTimeout(function() {
	$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove();
	});
}, 5000);
</script>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="alert bg-green alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{ Session::get('berhasil') }}
		</div>
	</div>
</div>
@endif

@if(Session::has('update'))
<script>
window.setTimeout(function() {
	$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove();
	});
}, 5000);
</script>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="alert bg-cyan alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{ Session::get('update') }}
		</div>
	</div>
</div>
@endif


<div class="row clear-fix">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{ route('beranda') }}">Beranda</a></li>
			<li class="active">Pendaftaran Restoran</li>
		</ol>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-right">
		<a href="{{ route('pendaftaran-restoran-tambah') }}" class="btn btn-primary waves-effect"><i class="material-icons">add</i><span>Tambah Objek Restoran</span></a>
	</div>
</div>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>DAFTAR RESTORAN</h2>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-hover table-bordered basic-example responsive" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Objek Pajak</th>
								<th>Nama Objek Pajak</th>
								<th>Alamat</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@if(Session::has('dataBaru'))
							<tr>
								<td>1</td>
								<td>{{ Session::get('dataBaru') ['nop_pbb'] }}</td>
								<td>{{ Session::get('dataBaru') ['nama_objek_pajak'] }}</td>
								<td>{{ Session::get('dataBaru') ['alamat'] }} {{ Session::get('dataBaru') ['rt'] }} {{ Session::get('dataBaru') ['rw'] }}</td>
								<td>Dalam Proses Verifikasi</td>
								<td><a href="" class="btn btn-info btn-xs waves-effect" data-toggle="modal" data-target="#defaultModal">Detil</a>&nbsp;<a href="{{ route('pendaftaran-restoran-ubah') }}" class="btn btn-warning btn-xs waves-effect">Ubah</a></td>
							</tr>
							@endif
							<tr>
								<td>2</td>
								<td>31 74 030 003 001 0004 0</td>
								<td>Restoran 1</td>
								<td>Jl. Denpasar Kav 51 Karet</td>
								<td>Dalam Proses Verifikasi</td>
								<td><a href="" class="btn btn-info btn-xs waves-effect" data-toggle="modal" data-target="#defaultModal">Detil</a>&nbsp;<a href="{{ route('pendaftaran-restoran-ubah') }}" class="btn btn-warning btn-xs waves-effect">Ubah</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>31 74 030 003 001 0005 0</td>
								<td>Restoran 2</td>
								<td>Jl. Surabaya No. 33 Menteng</td>
								<td>Terverifikasi</td>
								<td><h4><a href="" class="btn btn-info btn-xs waves-effect" data-toggle="modal" data-target="#defaultModal">Detil</a></h4></td>
							</tr>
							<tr>
								<td>4</td>
								<td>31 74 030 003 001 0006 0</td>
								<td>Restoran 3</td>
								<td>Jl. Panjang Sekali Cipulir</td>
								<td>Terverifikasi</td>
								<td><h4><a href="" class="btn btn-info btn-xs waves-effect" data-toggle="modal" data-target="#defaultModal">Detil</a></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Detail Objek Pajak</h4>
			</div>
			<div class="modal-body">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>Nomor Objek Pajak</td>
							<td>31709xxxxxxxxx09289</td>
						</tr>
						<tr>
							<td>Nama Objek Pajak</td>
							<td>Restoran 1</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>Jl. Denpasar Kav 51 Karet</td>
						</tr>
						<tr>
							<td>Jenis Masakan Utama</td>
							<td>Masakan Padang</td>
						</tr>
						<tr>
							<td>Luas Tanah</td>
							<td>102 m<sup>2</sup></td>
						</tr>
						<tr>
							<td>Luas Bangunan</td>
							<td>165 m<sup>2</sup></td>
						</tr>
						<tr>
							<td>Luas Tempat Usaha</td>
							<td>92 m <sup>2</sup></td>
						</tr>
						<tr>
							<td>Status Kepemilikan Tempat</td>
							<td>Milik Sendiri</td>
						</tr>
						<tr>
							<td>Fasilitas Parkir</td>
							<td>Ada</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>Dalam Proses Verifikasi</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('bottomscript')
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
<script>
$(function () {
    $('.basic-example').DataTable({
    });

	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});
    
});
</script>

<script src="{{ asset('js/pages/ui/modals.js') }}"></script>
@endsection