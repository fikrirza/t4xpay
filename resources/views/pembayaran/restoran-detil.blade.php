@extends('layout.master')

@section('title')
<title>Pembayaran Pajak Restoran</title>
@endsection

@section('headscript')
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet">
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
	<li><a href="{{ route('pembayaran-restoran') }}">Pembayaran Pajak Restoran</a></li>
	<li class="active">Daftar Pajak Restoran</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>PEMBAYARAN PAJAK RESTORAN | Restoran 2 : 31 74 030 003 001 0005 0</h2>
			</div>
			<div class="body">
				<table class="table table-hover table-bordered basic-example responsive" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Masa Pajak</th>
							<th>Tahun Pajak</th>
							<th>Jatuh Tempo</th>
							<th>Jumlah</th>
							<th>Status Pembayaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>DESEMBER</td>
							<td>2017</td>
							<td>-</td>
							<td>Rp. 800.000,-</td>
							<td>Lunas</td>
							<td><a href="{{ route('pembayaran-restoran-detil') }}" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>JANUARI</td>
							<td>2018</td>
							<td>-</td>
							<td>Rp. 830.000,-</td>
							<td>Lunas</td>
							<td><a href="" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>FEBRUARI</td>
							<td>2018</td>
							<td>-</td>
							<td>Rp. 790.000,-</td>
							<td>Lunas</td>
							<td><a href="" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>MARET</td>
							<td>2018</td>
							<td>12 - April - 2018 <h6><span class="label label-danger">1 Hari Lagi</span></h6></td>
							<td>Rp. 890.000,-</td>
							<td>Belum Lunas</td>
							<td><a href="{{ route('transaksi-pembayaran') }}" class="btn btn-info btn-xs waves-effect">Bayar</a></td>
						</tr>
					</tbody>
				</table>
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
    $('.basic-example').DataTable({});

	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});
});
</script>
@endsection