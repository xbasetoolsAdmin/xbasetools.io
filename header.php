<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>XbaeTools</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <link rel="stylesheet"  href="flayout/css/util.css" />
 <link rel="stylesheet"   href="layout/css/bootstrap.min.css" />
<link rel="stylesheet"    href="layout/css/all.min.css" />
<link rel="stylesheet"    href="layout/css/flexslider5.css" />
<link rel="stylesheet"    href="layout/css/main.css" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />

<link rel="stylesheet"   href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<script  src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script  src="https://code.jquery.com/jquery-3.6.4.mi.js"></script>
<script type="text/javascript" src="js/jquery.datatables.min.js">
</script>
<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="layout/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<script type="text/javascript" src="files/js/jquery.js"></script>
<!---<script type="text/javascript" src="component/accounts.js"></script>---->         
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
           
    
    
