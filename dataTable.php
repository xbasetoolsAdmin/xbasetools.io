
<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>

<!doctype html>
<html>
 
<head>
    <link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" type="text/css" href="files/css/flags.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <script type="text/javascript" src="files/js/jquery.js?1"></script>
    <script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
    <script type="text/javascript" src="files/js/sorttable.js"></script>
    <script type="text/javascript" src="files/js/table-head.js?3334"></script>
    <script type="text/javascript" src="files/js/bootbox.min.js"></script>
    <script type="text/javascript" src="files/js/clipboard.min.js"></script>
 
    <link rel="shortcut icon" href="files/img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="referrer" content="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>JeruxShop</title>
<style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <title>myTable</title>
  <link rel="stylesheet" href="layout/css/bootstrap.min.css" />
  <link rel="stylesheet" href="layout/css/main.css" />
  <link rel="stylesheet" href="layout/css/util.css" />
  <link rel="stylesheet" href="layout/css/all.min.css" />

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Xbaseleet</title>
<script type="text/javascript">

</script>

</head>



<body>
  <nav class="navbar nabber-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">xbasetools</a>
      </div>
  </nav>
<style>
  
  
</style>
<?php include"mainDiv.php";?>










  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/jquery.datatables.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="layout/css/bootstrap.min.js"></script>
  <script src="component/accounts.js"></script>
  <script type=text/javascript">
  
  </script>
</body>
</html>