@extends('layout.master')

@section('title')
<title>Pelaporan Hotel</title>
@endsection

@section('headscript')
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet">
@endsection


@section('content')
<ol class="breadcrumb">
	<li><a href="{{ route('beranda') }}">Beranda</a></li>
	<li class="active">Pelaporan Hotel</li>
</ol>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>PELAPORAN PAJAK HOTEL</h2>
			</div>
			<div class="body">
				<table class="table table-hover table-bordered basic-example responsive" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>NPWPD</th>
							<th>Nomor Objek Pajak</th>
							<th>Nama Objek Pajak/ Nama Hotel</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>31709xxxxxxxxx63476</td>
							<td>31 74 030 003 001 0007 0</td>
							<td>Hotel 2</td>
							<td>Jl. Surabaya No. 33 Menteng</td>
							<td><a href="{{ route('pelaporan-hotel-detil') }}" class="btn btn-info btn-xs waves-effect">Detil</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>31709xxxxxxxxx78374</td>
							<td>31 74 030 003 001 0008 0</td>
							<td>Hotel 3</td>
							<td>Jl. Panjang Sekali Cipulir</td>
							<td><a href="" class="btn btn-info btn-xs waves-effect">Detil</a></td>
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