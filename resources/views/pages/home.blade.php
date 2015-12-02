@extends('master.master')
@section('body_content')
<div class="container-fluid" style="margin-top:10%;">
</div>
<body>
	<div class="col-md-10 col-md-offset-1">
		<table id="order" class="display">
		    <thead>
		        <tr>
		            <th style="text-align:center">ID</th>
		            <th style="text-align:center">Nama</th>
		            <th style="text-align:center">Alamat</th>
		            <th style="text-align:center">No Telp</th>
		            <th style="text-align:center">Waktu</th>
		            <th style="text-align:center">Bukti</th>
		            <th style="text-align:center">Lihat Detail</th>
		            <th style="text-align:center">Verifikasi Pengiriman</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach ($orders as $order)
		        <tr>
		            <td>{{$order->id}}</td>
		            <td>{{$order->nama}}</td>
		            <td>{{$order->alamat}}</td>
		            <td>{{$order->no_telp}}</td>
		            <td>{{$order->waktu}}</td>
		            @if ($order->flag_bukti_transfer == 1)
		            	<td><center><i class="fa fa-check fa-2x" style="color:green"></i></center></td>
		            @elseif ($order->flag_bukti_transfer == 0)
		            	<td><center><i class="fa fa-close fa-2x" style="color:red"></i></center></td>
		            @endif
		            <td><center><a class="btn btn-warning" href="{{URL::to('detail/'.$order->id)}}">Lihat Detail</a></center></td>
		            @if ($order->flag_pengiriman == 1)
		            	<td><center><i class="fa fa-check fa-2x" style="color:green"></i></center></td>
		            @elseif ($order->flag_pengiriman == 0)
		            	<td><center><a class="btn btn-primary" href="{{URL::to('verifikasi/'.$order->id)}}">Verifikasi</a></center></td>
		            @endif
		        </tr>
		        @endforeach
		    </tbody>
		</table>
		<br>
		<br>
		<br>
	</div>
</body>
<script type="text/javascript">
	$(document).ready( function () {
    	$('#order').DataTable();
} );
</script>
@stop