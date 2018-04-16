@extends('layout.master')

@section('title')
<title>Pembayaran Pajak PBB</title>
@endsection

@section('headscript')
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet">
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
	<li><a href="{{ route('pembayaran-pbb') }}">Pembayaran Pajak PBB</a></li>
	<li class="active">Daftar Pajak PBB</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>PEMBAYARAN PAJAK PBB | 31709xxxxxxxxx63476</h2>
			</div>
			<div class="body">
				<table class="table table-hover table-bordered basic-example responsive" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Tahun Pajak</th>
							<th>Jatuh Tempo</th>
							<th>PBB Yang Harus Dibayar</th>
							<th>Status Pembayaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>2015</td>
							<td>-</td>
							<td>Rp. 800.000,-</td>
							<td>Lunas</td>
							<td><a href="{{ route('pembayaran-restoran-detil') }}" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>2016</td>
							<td>-</td>
							<td>Rp. 830.000,-</td>
							<td>Lunas</td>
							<td><a href="" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>2017</td>
							<td>-</td>
							<td>Rp. 790.000,-</td>
							<td>Lunas</td>
							<td><a href="" class="btn btn-success btn-xs waves-effect">Lihat</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>2018</td>
							<td>30 - Maret - 2018 <h6><span class="label label-danger">Lewat 1 Bulan</span></h6></td>
							<td>Rp. 890.000,-</td>
							<td>Belum Lunas</td>
							<td><a href="{{ route('transaksi-pembayaran-pbb') }}" class="btn btn-info btn-xs waves-effect">Bayar</a></td>
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