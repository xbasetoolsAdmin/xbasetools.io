<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>


    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive id="mainDiv">
            <table id="lead_item" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="6">Description</th>
                        <th data-priority="7">Email N</th>
                        <th data-priority="8">Seller</th>
                     <!---   <th data-priority="2">Proof</th>--->
                        <th data-priority="9">Price</th>
                        <th data-priority="10">Added on </th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
                <thody>
                
                
                

 <?php
include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM leads WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>     
    <td id='country'>
    <i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='infos'> ".htmlspecialchars($row['infos'])." </td> 
<td id='number'> 

    ".htmlspecialchars($row['number'])." 
    
</td>

<td id='seller'>
    
     ".htmlspecialchars($SellerNick)."

</td>
   
<td id='price'> 
    
    ".htmlspecialchars($row['price'])."
    
</td>

  <td id='created_date'> 
        
        ".$row['date']."</td>";
    echo '
    <td>
    
	<span id="leads'.$row['id'].'" 
         title="buy" 
        type="leads">
            <a onclick="javascript:buythistool('.$row['id'].')" 
            class="btn btn-primary btn-xs">
            <font color=white>Buy</font></a></span>
            <center>
            
    </td>
            </tr>
     ';
 }

?>
            </tbody>
            </table>
            
            
            
            
        </div>
    </div>
    
    
    