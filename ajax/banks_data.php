<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 
 
	
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>We Have Fresh Bank Logs with  E-mails Access  for Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>There is <b> 0 </b> Available.</li>
        </ul>
    </div>
    
    <input type=hidden id="type" name="type" value="5" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            <input type="#filter" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                 <option value="">All Countries</option> <?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `banks` WHERE `sold` = '0' ORDER BY country ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';	}
?>
</select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option> <?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `banks` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
            </select>
        </div>
    </div>

 <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive" id="mainDiv">
            <table id="banks_item" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
        <th data-priority="1"></th>
      <th scope="col" >Country</th>
      <th scope="col">Bank Name</th>
      <th scope="col">Balance</th>
      <th scope="col">detail</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
        <th data-priority="1">Created Date</th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  </table>
			<script type="text/javascript">
$(document).ready(function() {
 $('#banks_item').DataTable({
 "lengthMenu": [
 [10, 25, 100, 500, -1],
  [10, 25, 100, 500, "All"] ],
'iDisplayLength': 1000,
            "aaSorting": []
                });
            });
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#bank_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#bank_sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#bank_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="bank_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="bank_sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="bank_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
 pageDiv(8,'Banks - xBaseTools','banks',1);
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=banks",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#bank"+id).html(data).show();
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


