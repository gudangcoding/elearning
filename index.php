<!DOCTYPE html>
<html lang="ID">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kursus Komputer | Video Tutorial Komputer</title>

		<!-- Bootstrap CSS -->
		<link href="asset/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Kursus Komputer Online</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Login Peserta</h3>
						</div>
						<div class="panel-body">
							<form action="" method="POST" role="form">
							
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="form-control" id="" placeholder="Masukkan Email">
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="text" class="form-control" id="" placeholder="Masukkan Password">
								</div>
								
							
								<button type="submit" class="btn btn-primary">Login</button><hr>
								<a href="?page=daftar" class="btn btn-xs btn-info">Daftar</a>
								<a href="?page=lupapassword" class="btn btn-xs btn-success">Lupa Password</a>
							</form>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
					<?php 
						$page = @$_REQUEST['page'];
						$act = @$_REQUEST['act'];
						if ($page) {
								include "modul/$page.php";
						}else{
								include 'modul/home.php';
							}
					?>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="asset/js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="asset/js/bootstrap.min.js"></script>
	</body>
</html>