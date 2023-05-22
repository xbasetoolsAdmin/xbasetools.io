
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
?><!doctype html>
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
    <title>Xbaseleet</title>
</head>
<style>
    #table {
        .sortable
    }
 
    table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after {
        content: " \25BE"
    }
 
    .label-as-badge {
        border-radius: 0.5em;
    }
 
    body {
        padding-top: 50px;
    }
 
    table.floatThead-table {
        border-top: none;
        border-bottom: none;
        background-color: #fff;
    }
 
    @media (min-width: 768px) {
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    }
 
    #mydiv {
        height: 400px;
        position: relative;
    }
 
    .ajax-loader {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        /* presto! */
 
    }
</style>
<script type="text/javascript" src="component/main.js"></script>

<style>
    .navbar {
        background-color: #001f3f;
    }
</style>
 
<body style="padding-top: 70px; padding-bottom: 70px;">
 
    <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div class="navbar-brand" onClick="location.href='index.html'" onMouseOver="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Xbaseleet <small><span class="glyphicon glyphicon-refresh"></span></small></b></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="topFixedNavbar1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - Xbaseleet','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp"></span></a></li>
                            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - Xbaseleet','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel"></span></a></li>
                            <li><a href="shell.html" onclick="pageDiv(3,'Shell - Xbaseleet','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - Xbaseleet','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer"></span></a></li>
                            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - Xbaseleet','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="leads.html" onclick="pageDiv(6,'Leads - Xbaseleet','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - Xbaseleet','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium"></span></a></li>
                            <li><a href="banks.html" onclick="pageDiv(8,'Banks - Xbaseleet','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - Xbaseleet','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams"></span></a></li>
                            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - Xbaseleet','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials"></span></a></li>
                        </ul>
                    </li>
 
                </ul>
                <ul class="nav navbar-nav navbar-right">
 
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
                            </span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - Xbaseleet','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span> </span></a></li>
                            <li><a href="reports.html" onclick="pageDiv(12,'Reports - Xbaseleet','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> </span> </a></li>
 
                        </ul>
                    </li>
 
                    <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="setting.html" onclick="pageDiv(14,'Setting - Xbaseleet','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li><a href="orders.html" onclick="pageDiv(15,'Orders - Xbaseleet','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
                            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
 
                            <li class="divider"></li>
                            <li><a href="logout.html">Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?php include"ajax/banks_data.php";?>

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
         $(document).keydown(function(event) {
            if (event.which == "17")
                cntrlIsPressed = true;
        });
 
        $(document).keyup(function() {
            cntrlIsPressed = false;
        });
 
        var cntrlIsPressed = false;
 
 
        $(window).on("popstate", function(e) {
            location.replace(document.location);
 
        });
 
 
        $(window).on('load', function() {
            $('.dropdown').hover(function() {
                $('.dropdown-toggle', this).trigger('click');
            });
            pageDiv(8, 'Banks - xbaseTools', 'banks', 1);
            var clipboard = new Clipboard('.copyit');
            clipboard.on('success', function(e) {
                setTooltip(e.trigger, 'Copied!');
                hideTooltip(e.trigger);
                e.clearSelection();
            });
 
        });
 
 
        function setTooltip(btn, message) {
            //console.log("hide-1");
            $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
            //console.log("show");
        }
 
        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide'); /*console.log("hide-2");*/
            }, 1000);
        }
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#bank_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#bank_sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#bank_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="bank_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="bank_sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="bank_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
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
    
    
    </body>
    </html>
