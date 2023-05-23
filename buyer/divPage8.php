<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>







<?php
	///////////////// premium
 if ($rrrrx[‘acctype’] == “account”) {
	 $itemid = $rrrrx[‘s_id’];
$qe = mysqli_query($dbcon, “SELECT * FROM accounts WHERE id=‘$itemid’”) or die(mysql_error());
while ($rowe = mysqli_fetch_assoc($qe))

 {

$country = $rowe[‘country’];
$site = $rowe[‘sitename’];
$description = $rowe[‘infos’];
$information = $rowe[‘url’];
$price = $rowe[‘price’];
$code = array_search(“$country”, $countrycodes);
$countrycode = strtolower($code);
?>

<table class=“table”>
<tr>

  <td>

  </td>
  
  
  
    <span class=“flag-icon flag-icon-<?php echo htmlspecialchars($countrycode); ?>”></span> <?php echo htmlspecialchars($country); ?>
  
  <?php echo ($description); ?>
  
<?php echo ($site); ?>
  <td><?php echo ($information); ?>
  <?php echo ($price); ?>$</td>