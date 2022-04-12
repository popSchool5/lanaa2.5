<?php
session_start();

if (!empty($_SESSION)) {
	$page = "index";
	require('./src/co_bdd.php');
	require('./header.php');
	require('./sidebar.php');
	require('./src/function.php');


	 header('location: factures.php ');

?>
	

	</div>


<?php
} else {
	header('location: ./connexion.php?error');
}
?>

</body>

</html>