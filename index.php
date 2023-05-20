
         
<body style="padding-top: 70px; padding-bottom: 70px;">

	<nav class="navbar navbar-expand navbar-dark bg-primary  fixed-top">
 		<a class="navbar-brand d-none d-lg-block" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span> Olux Shop</span></a>
		<a class="navbar-brand d-block d-lg-none" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span></span></a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - FeluxShop','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp"></span></a></li>
            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - FeluxShop','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel"></span></a></li>
            <li><a href="shell.html" onclick="pageDiv(3,'Shell - FeluxShop','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - FeluxShop','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer"></span></a></li>
            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - FeluxShop','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp"></span></a></li>  
          </ul>
        </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="leads.html" onclick="pageDiv(6,'Leads - FeluxShop','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads"></span></a></li>
          </ul>
        </li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - FeluxShop','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium"></span></a></li>
            <li><a href="banks.html" onclick="pageDiv(8,'Banks - FeluxShop','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - FeluxShop','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams"></span></a></li>
            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - FeluxShop','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials"></span></a></li>  
          </ul>
        </li>
                      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                        <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li><a href="seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>';
} else {
} ?>      
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
<?php
$sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == "1") {
    echo '<span class="label label-danger">1</span>';
}
?>
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - FeluxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span><?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span></a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - FeluxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> <?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span> </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - FeluxShop','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - FeluxShop','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - FeluxShop','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - FeluxShop','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html" >Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainDiv">


</div>
</body>
</html>

