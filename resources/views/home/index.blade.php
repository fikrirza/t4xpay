@extends('layout.master')


@section('title')
<title>Beranda</title>
@endsection

@section('headscript')
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet">
@endsection


@section('content')
<ol class="breadcrumb">
	<li class="active">Beranda</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>NIK : 317405626262600002</h2>
			</div>
			<div class="body">
				<div class="row clearfix">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img class="img-responsive thumbnail" src="{{ asset('images/user-a.png') }}">
					</div>
					<div class="col-md-9">
						<table class="table">
							<tr>
								<td>Nama</td>
								<td>Pengguna</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>Jl. XYZ</td>
							</tr>
							<tr>
								<td>No. Telp</td>
								<td>021-723778</td>
							</tr>
							<tr>
								<td>HP</td>
								<td>080989999</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>pengguna@email.com</td>
							</tr>
							<tr>
								<td>Facebook</td>
								<td>http://www.facebook.com/fb-pengguna</td>
							</tr>
							<tr>
								<td>Twitter</td>
								<td>@pengguna</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-12">
						<table class="table table-hover table-bordered beranda-table responsive" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Objek Pajak</th>
									<th>Nomor Objek Pajak</th>
									<th>Nilai</th>
									<th>Pajak</th>
									<th>Status Bayar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Restoran</td>
									<td>31709xxxxxxxxx09289</td>
									<td>-</td>
									<td>Rp. ,-</td>
									<td>Lunas</td>
									<td>-</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Restoran</td>
									<td>31709xxxxxxxxx34231</td>
									<td>-</td>
									<td>Rp. ,-</td>
									<td>Lewat 2 Bulan</td>
									<td><a href="{{ route('pembayaran-restoran-detil') }}" class="btn btn-danger waves-effect">Pembayaran</a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>PBB</td>
									<td>31709xxxxxxxxx444476</td>
									<td>-</td>
									<td>Rp. ,-</td>
									<td>Lewat 1 Bulan</td>
									<td><a href="{{ route('pembayaran-restoran-detil') }}" class="btn btn-danger waves-effect">Pembayaran</a></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Hotel</td>
									<td>31709xxxxxxxxx64545</td>
									<td>-</td>
									<td>Rp. ,-</td>
									<td>Belum Lapor</td>
									<td><a href="{{ route('pelaporan-restoran-tambah') }}" class="btn btn-success waves-effect">Pelaporan</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
    $('.beranda-table').DataTable({
        responsive: true
    });
});
</script>
@endsection