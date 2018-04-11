@extends('layout.master')

@section('title')
<title>Pendaftaran PBB</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection


@section('content')
<div class="block-header">
	<h2>PENDAFTARAN PBB</h2>
</div>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					DAFTAR PBB
				</h2>
				<div class="header-dropdown">
					<a href="{{ route('pendaftaran-pbb-tambah') }}" class="btn btn-primary waves-effect">Tambah Objek PBB</a>
				</div>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover basic-example dataTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Objek Pajak</th>
								<th>Alamat Objek Pajak</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>31709xxxxxxxxx09289</td>
								<td>Jl. Denpasar Kav 51 Karet</td>
								<td>Dalam Proses Verifikasi</td>
								<td>
									<h4><a href="" class="label label-info waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Detil</a></h4>
									<h4><a href="" class="label label-warning waves-float" data-toggle="tooltip" data-placement="top" title="Ubah">Ubah</a></h4>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>31709xxxxxxxxx63476</td>
								<td>Jl. Surabaya No. 33 Menteng</td>
								<td>Terverifikasi</td>
								<td><h4><a href="" class="label label-info waves-float" data-toggle="tooltip" data-placement="top" title="Detil">Detil</a></h4></td>
							</tr>
							<tr>
								<td>3</td>
								<td>31709xxxxxxxxx78374</td>
								<td>Jl. Panjang Sekali Cipulir</td>
								<td>Terverifikasi</td>
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