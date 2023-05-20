<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>

<!doctype html>
 <meta name="referrer" content="no-referrer" />
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
<script type="text/javascript" src="component/accounts.js"></script>
            


    </head>
           
    
    
