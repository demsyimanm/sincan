
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" href="{{URL::to('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" href="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
	<style type="text/css">
		body{
			background-color : white;
		}
	</style>
	<title>SINCAN</title>
</head>
<body>
	<div class="container-fluid" style="margin-top:10%;">
		<div class="panel panel-primary" style="width:25%;margin:auto;position:relative;display:">
			<div class="panel-heading">
				<h3 class="panel-title">Login</h3>
			</div>
			<div class="panel-body">
				<form action="{{URL::to('login')}}" method="POST">
					  <input type="text" class="form-control" placeholder="Username" name="username" >
					  <br>
					  <input type="password" class="form-control" placeholder="Password" name="password">
					  <br>
					  {!! csrf_field() !!}
					  <button class="btn btn-primary" style="float:right">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
