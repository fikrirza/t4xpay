@extends('layout.master')

@section('title')
<title>Pembayaran Pajak Restoran</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
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
				<h2>PEMBAYARAN PAJAK RESTORAN | Restoran 2 : 31709xxxxxxxxx63476</h2>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover basic-example dataTable">
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
								<td><h4><a href="{{ route('pembayaran-restoran-detil') }}" class="label label-success waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Lihat</a></h4></td>
							</tr>
							<tr>
								<td>2</td>
								<td>JANUARI</td>
								<td>2018</td>
								<td>-</td>
								<td>Rp. 830.000,-</td>
								<td>Lunas</td>
								<td><h4><a href="" class="label label-success waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Lihat</a></h4></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>FEBRUARI</td>
                                <td>2018</td>
                                <td>-</td>
                                <td>Rp. 790.000,-</td>
                                <td>Lunas</td>
                                <td><h4><a href="" class="label label-success waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Lihat</a></h4></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>MARET</td>
                                <td>2018</td>
                                <td>12 - April - 2018 <h6><span class="label label-danger">1 Hari Lagi</span></h6></td>
                                <td>Rp. 890.000,-</td>
                                <td>Belum Lunas</td>
                                <td><h4><a href="{{ route('transaksi-pembayaran') }}" class="label label-info waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Bayar</a></h4></td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('bottomscript')
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>

<script>
$(function () {
    $('.basic-example').DataTable({
        responsive: true
    });

	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});
});
</script>
@endsection