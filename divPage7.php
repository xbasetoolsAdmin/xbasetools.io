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
 include("cr.php");

?>



     <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
         <div class="col-sm-12 table-responsive" id="mainDiv">
             <table id="account_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                 <thead>
                     <tr>
                         <th scope="col"> </th>
                         <th scope="col">ID</th>
                         <th scope="col">Website</th>
                         <!---<th scope="col">Site Name</th>- -->
                         <th scope="col">Details</th>
                         <th scope="col">Seller</th>
                         <th scope="col">Price</th>
                         <th scope="col">Created Date </th>
                         <th scope="col">Buy</th>
                     </tr>
                 </thead>
                <tbody>
                <?php 
	$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>     
         <th>                      <th>
    <td id='id'> ".($row['id'])." </td> 
    <td id='country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".($row['country'])." </td>
    <td id='sitename'> ".($row['sitename'])." </td> 
	<td> ".($row['infos'])." </td>
    <td id='seller'> ".($SellerNick)."</td>
    <td id='country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".($row['id'])." </td>
    <td> ".($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="premium'.$row['id'].'" title="buy" type="premium"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>
 </tbody>
              </table>
         </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                     <h4 class="modal-title" id="myModalLabel"></h4>
                 </div>
                 <div class="modal-body" id="modelbody"></div>
                 <div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
    <script>
	function buythistool(id){
  bootbox.confirm("Are you sure?",
		  
function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=accounts",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#account"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}

function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}
</script>

