<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/assets/css/bootstrap.min.css">
		<script type="text/javascript" href="http://localhost/laravel/public/assets/js/jquery.min.js"></script>
		<script type="text/javascript" href="http://localhost/laravel/public/assets/js/bootstrap.min.js"></script>
		<style type="text/css">
			body{
				background-color : #59ABE3; 
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="#">Sembarang</a>
			<ul class="nav navbar-nav">
			    <li class="active"><a href="#">Home</a></li>
			    <li><a href="#">Page 1</a></li>
			    <li><a href="#">Page 2</a></li> 
			    <li><a href="#">Page 3</a></li> 
		  	</ul>
		</nav>
		<div class="container-fluid" style="margin-top:10%;">
			<div class="panel panel-primary" style="width:25%;margin:auto;position:relative;display:">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST">
						  <input type="text" class="form-control" placeholder="Username" name="username">
						  <br>
						  <input type="text" class="form-control" placeholder="Password" name="password">
						  <br>
						  <button class="btn btn-primary" style="float:right">Login</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>