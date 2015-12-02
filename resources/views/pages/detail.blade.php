@extends('master.master')
@section('body_content')
<div class="container-fluid" style="margin-top:10%;">
</div>
<body>
	<div class="col-md-10 col-md-offset-1" style="margin-bottom:10%">
		<center><h2>Detail Transaksi</h2></center>
		<br>
		<br>
		<center><img style="width:30%" src="{{URL::to($order->bukti_transfer)}}"></center>
		<div class="col-md-12">
			<label class="col-md-2">ID</label>
			<label class="col-md-10">: {{$order->id}}</label>
		</div>
		<br>
		<div class="col-md-12">
			<label class="col-md-2">Nama</label>
			<label class="col-md-10">: {{$order->nama}}</label>
		</div>
		<br>
		<div class="col-md-12">
			<label class="col-md-2">Alamat</label>
			<label class="col-md-10">: {{$order->alamat}}</label>
		</div>
		<br>
		<div class="col-md-12">
			<label class="col-md-2">Nomor Telepon</label>
			<label class="col-md-10">: {{$order->no_telp}}</label>
		</div>
		<br>
		<div class="col-md-12">
			<label class="col-md-2">Waktu</label>
			<label class="col-md-10">: {{$order->waktu}}</label>
		</div>
		<br>
		<br>
		<div class="col-md-12">
			<label class="col-md-2">Kode Pos</label>
			<label class="col-md-10">: {{$order->kode_pos}}</label>
		</div>
		<br>
		<a href="{{URL::to('login')}}" style="margin-top:5%" class="btn btn-primary pull-left">Kembali</a>
	</div>
</body>
@stop