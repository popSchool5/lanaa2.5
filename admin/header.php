<!doctype html>
<html lang="fr">

<head>
	<title>Dashboard | Lanaa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">

	<link rel="stylesheet" href="assets/css/main.css">

	<link rel="stylesheet" href="assets/css/demo.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<script src='https://cdn.tiny.cloud/1/qgf3y78kavpizx2zcunnsewfrrah0od278tp12h5vpah3pdj/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>
	<script>
		tinymce.init({
			selector: '#monactuarea',  
		  plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
		});
	</script>
</head>

<body>

	<style>
		.navbar-default .brand {
			padding: 13PX 30px;
		}
	</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logoBlancRogner2.jpg" width="20%" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<style>
					.bg {
						display: flex !important;
						flex-direction: row !important;
					}
				</style>
				<form method="GET" action="search.php" class="navbar-form navbar-left">
					<div class="bg input-group">
						<select name="choix" class="form-control">
							<!-- <option value="rdv">rendez-vous</option> -->
							<option value="clients">Client</option>

						</select>
						<input type="text" name="search" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
					</div>
				</form>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">



					</ul>
				</div>
			</div>
		</nav>