<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<!doctype html>
<html>
<head>	<meta charset="utf-8"> <meta name="referrer" content="no-referrer" /><link rel="shortcut icon" href="files/img/favicon.ico" /><meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" /><link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<title>JeruxShop</title>
</head>
<?php
	
	
	                              include "mainDiv.php";
	
	
	
	
	
?>	
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/jquery.datatables.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="layout/css/bootstrap.min.js"></script>
 <script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
 <script type="text/javascript" src="files/js/sorttable.js"></script>
 <script type="text/javascript" src="files/js/table-head.js?3334"></script>
 <script type="text/javascript" src="files/js/bootbox.min.js"></script>
 <script type="text/javascript" src="files/js/clipboard.min.js"></script>	
  <script src="component/accounts.js"></script>

<script type="text/javascript">
function ajaxinfo() {
        $.ajax({
            type: 'GET',
            url: 'ajaxinfo.html',
            timeout: 10000,
 
            success: function(data) {
                if (data != '01') {
                    var data = JSON.parse(data);
                    for (var prop in data) {
                        $("#" + prop).html(data[prop]).show();
                    }
                } else {
                    window.location = "logout.html";
                }
            }
        });
 
    }
    setInterval(function() {
        ajaxinfo()
    }, 3000);
 
    ajaxinfo();
         pageDiv(7, 'Banks - JeruxShop', 'table.html', 1);
			$('#filterbutton').click(function () 
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

		      </body>
		      </html>


