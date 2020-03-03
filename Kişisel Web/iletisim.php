<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/ico.ico"/>
	<style type="text/css">


		body{
			background: #02010a;
		}

		.fab:hover{

			color: #850b18;
			transition: 0.1s ease-in;
			font-size: 35px;


		}


	</style>
	<title></title>
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-transparent" style="opacity: 0.97;" >
		<div class="container-fluid" style="font-family: 'Quicksand' ; font-size: 20px;">
			<a href="index.php" class="navbar-brand"><img width="130" src="img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#no1">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="no1">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Anasayfa</a></li>
					<li class="nav-item"><a href="hakkimda.php" class="nav-link">Hakkımda</a></li>
					<li class="nav-item"><a href="calismalarim.php" class="nav-link">Çalışmalarım</a></li>
					<li class="nav-item active"><a href="iletisim.php" class="nav-link">İletişim</a></li>
				</ul>
			</div>
		</div>

	</nav>
	<div class="container">
		<br>
		<h3 class="display-4 text-center text-white">İletişim</h3> <br>

		<br> <hr class="bg-white">

		<form  action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfij7sktJ1wfjWtOnDUpXxeGK5IxlJkSwYATes9uM7XPVEbBg/formResponse" target="_self" method="POST">
			<div class="form-group">
				
				<input type="text" name="entry.2005620554" class="form-control"  placeholder="Adınızı Giriniz">
				
			</div>
			<div class="form-group">
				
				<input type="email" name="entry.1045781291" class="form-control" placeholder="E-Mailinizi Giriniz">
			</div>
			<div class="form-group">
				
				<input type="text" name="entry.839337160" class="form-control" placeholder="Mesajınızı Giriniz">
			</div>

			<button type="submit" value="Submit" class="btn text-white" style="background:#850b18;">Gönder</button>
		</form>


	</div>
	<br>
<footer style="background: #0a0101;" class="mt-5">
	<div class="container py-5" align="center">
		<div class="row">
			<div class="col-md-3">
				<img src="img/logo.png" class="mb-4" width="150">
			</div>
			<div class="col-md-3">
				<ul class="list-unstyled">
					<a   class=" text-muted" style="font-size: 30px;" target="_blank" href="https://instagram.com/suleymanbyzt"><i class=" fab fa-instagram mr-2"></i></a>
					<a   class=" text-muted"  style="font-size: 30px;" target="_blank" href="https://github.com/suleymanbyzt"><i class="fab fa-github"></i></a>
					<a   class=" text-muted"  style="font-size: 30px;" target="_blank" href="https://twitter.com/suleymanbyzt"><i class="fab fa-twitter mr-2"></i>	</a>
				</ul>
			</div>
			<div class="col-md-6">
				<p class="text-muted">Yeni Blog Sayfam İçin Öneride Bulun</p> 
				<a href="iletisim.php"><button class="btn text-white" style="background:#850b18;">İletişim</button></a>
			</div>


		</div>
		<p class="text-muted" style="position: absolute;">©Süleyman Bayazit 2020</p>
	</div>

</footer>


	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>