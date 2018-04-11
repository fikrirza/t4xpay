@extends('layout.master')

@section('title')
<title>Bukti Pembayaran Pajak</title>
@endsection

@section('headscript')
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('beranda') }}">Beranda</a></li>
    <li class="active">Bukti Pembayaran Pajak</li>
</ol>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>BUKTI PEMBAYARAN PAJAK RESTORAN</h2>
            </div>
            <div class="body">
                

            </div>
        </div>
    </div>
</div>
@endsection