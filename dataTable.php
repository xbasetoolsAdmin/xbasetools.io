
<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>


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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js">

</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">xbasetools</a>
      
      
    </div>
  </nav>
  
<style>
  
  
</style>










<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/jquery.datatables.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="layout/css/bootstrap.min.js"></script>
  <script src="component/accounts.js"></script>
</body>
</html>