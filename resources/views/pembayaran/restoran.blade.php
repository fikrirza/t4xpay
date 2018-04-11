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
	<li class="active">Pembayaran Pajak Restoran</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>PEMBAYARAN PAJAK RESTORAN</h2>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover basic-example dataTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Objek Pajak</th>
								<th>Nama Objek Pajak/ Nama Restoran</th>
								<th>Alamat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>31709xxxxxxxxx63476</td>
								<td>Restoran 2</td>
								<td>Jl. Surabaya No. 33 Menteng</td>
								<td><h4><a href="{{ route('pembayaran-restoran-detil') }}" class="label label-info waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Detil</a></h4></td>
							</tr>
							<tr>
								<td>2</td>
								<td>31709xxxxxxxxx78374</td>
								<td>Restoran 3</td>
								<td>Jl. Panjang Sekali Cipulir</td>
								<td><h4><a href="" class="label label-info waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Detil</a></h4></td>
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