<?php
session_start();
require('./src/co_bdd.php');


if (!empty($_SESSION)) {
	$page = "clients";
	require('./header.php');
	require('./sidebar.php');
	require('./src/function.php');
	$users = viewUsers();

?>

	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">

			<div class="container-fluid">
		
				<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Listes de nos clients</h3>
							
							</div>
							<div class="panel-body no-padding">


								<table class="table table-striped">

									<thead>

										<tr>
											<th>No.</th>
											<th>Entreprise</th>
											<th>Nom du contact</th>
											<th>numéro</th>
											<th>Email</th>
										</tr>
									</thead>

									<tbody>
										<?php foreach ($users as $user) { ?>
											<tr>
												<td><a href="./entreprisePerso.php?id=<?= $user['id'] ?>"><?= $user['id'] ?></a></td>
												<td><?= $user['company'] ?></td>
												<td><?= $user['name'] ?></td>
												<?php if ($user['phone']) { ?>
													<td><?= $user['phone'] ?></td>
												<?php } else { ?>
													<td>Non renseigné</td>
												<?php } ?>
												<td><?= $user['email'] ?></td>
											</tr>
										<?php } ?>
									</tbody>

								</table>


							</div>



						</div>
					</div>

				</div>
				<!-- END OVERVIEW -->
				<div class="row">

					<div class="col-md-6">
						<!-- MULTI CHARTS -->

						<!-- END MULTI CHARTS -->
					</div>
				</div>

			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>

	!
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/app-common.js"></script>

	</body>
<?php
} else {

	header('location: connexion.php');
}
?>

</html>