<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'accounts', 'id' )
	->fields(
		Field::inst( 'acctype' ),
		Field::inst( 'country' ),
		Field::inst( 'infos' ),
		Field::inst( 'price' ),
		Field::inst( 'url' ),
		Field::inst( 'sold' ),
		Field::inst( 'sto' ),
		Field::inst( 'dateofsold' ),
		Field::inst( 'date' ),
		Field::inst( 'resseller' ),
		Field::inst( 'reported' ),
		Field::inst( 'sitename' ),
		Field::inst( 'login' ),
		Field::inst( 'pass' )
	)
	->process( $_POST )
	->json();
