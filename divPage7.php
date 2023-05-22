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


<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins" />
<meta name="revisit-after" content="2 days" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="../../favicon.ico" />
<title>AddBalance</title>
<link rel="stylesheet" href="layout/css/bootstrap.min.css" />
<script src="layout/js/jquery-3.4.1.min.js"></script>
<script src="layout/js/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="layout/js/bootstrap.min.js"></script>
<script src="layout/js/bootbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="layout/css/flags.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        </script>
<link rel="stylesheet" href="layout/css/all.min.css" />
<link rel="stylesheet" href="layout/css/main.css?v=12.9" />
<link rel="stylesheet" href="layout/css/util.css" />
<style>body{padding-top:80px}</style>
<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css" />
<script src="layout/js/main.js"></script>
<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        </script>
<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        </style>

<style>

.them button {
  color: #ffffff;

}
  .panel-default {
    border-color: #ecf0f1;
}

.panel {
  background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
  .card {
       background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-color: var(--color-card);
}

.panel-body {
    padding: 15px;
}

.panel-footer {
    padding: 10px 15px;
    background-color: var(--color-secondary2);
    border-top: 1px solid var(--color-secondary2);
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;

}

.panel-footer .label-info {
    background-color: #3498db;
}

.panel-footer .label-danger {
    background-color: #e74c3c;
}
.panel-footer .label-warning {
    background-color: #FFA726;
}


.panel-footer .label {

    display: inline;
    padding: .2em .6em .3em;
    font-size: 100%;
    font-weight: bold;
    line-height: 1;

    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#balance_data_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#balance_data_filter{
  color: var(--font-color);
}
#balance_data_length{
  color: var(--font-color);
}
#balance_data_paginate{
  color: var(--font-color);
}
#balance_data_info{
  color: var(--font-color);
}

    </style>
<div id="myTabContent" class="tab-content p-5">
<div id="addBalance">
<div id="balance">
<div class="row">
<div class="container col-md-4" style="color: var(--font-color); background-color: var(--color-card);">
<h4>Add Balance</h4>
<form id="formAddBalance" class="mt-2">
<div class="row">
<div class="form-group col-md-12">
<label for="method">Method</label>
<select name="methodpay" class="form-control" size="5" style="color: var(--font-color); background-color: var(--color-card);">
<option value="BitcoinPayment" selected="">Bitcoin</option>
<option value="LitecoinPayment">Litecoin</option>
<option value="EtherPayment">Ethereum</option>
<option value="PerfectMoneyPayment">Perfect Money</option>
<option value="UsdtPayment">USDT TRC20</option>
<option value="UsdtPaymenterc">USDT ERC20</option>
<option value="UsdtbscchainPayment">USDT BSC Chain</option>
<option value="BitcoincashPayment">Bitcoin Cash</option>
<option value="BinancePayment">Binance Coin</option>
<option value="BnbbscPayment">BNB Coin (BSC Chain)</option>
<option value="DogePayment">Dogecoin</option>
<option value="MoneroPayment">Monero</option>
</select>
</div>
</div>
<div class="row">
 <div class="form-group col-md-12">
<label for="amount" class="active">Amount</label> <input placeholder="20" pattern="[0-9]*" type="number" name="amount" class="form-control input-normal" style="color: var(--font-color); background-color: var(--color-card);" required="" />
</div>
</div>
<button type="submit" form="formAddBalance" class="btn btn-success btn-md waves-effect waves-light">Add Balance <span class="glyphicon glyphicon-plus"></span></button>
<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
<input type="hidden" name="action" value="validate_captcha" />
</form>
</div>
<div class="col-md-8">
<div class="bs-component">
<div class="well well">
<ul style="color: var(--font-color); background-color: var(--color-card2);">
<li>If you sent <b>Money</b> but it don't appear in your account please <a class="btn btn-danger btn-sm  waves-effect waves-light" href="tickets"><span class="glyphicon glyphicon-pencil"></span> Write Ticket</a></li>
<li>After payment funds will be added automatically to your account <b>INSTANTLY</b></li>
<li><b>PerfectMoney</b>/<b>Bitcoin</b> is a secure way to fund your account </li>
<li>Min is 10 USD For Bitcoin</li>
<li>Min is 10 USD For Perfect Money</li>
<li><b>Buyer Protection</b>
</li></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LfXIOIZAAAAANLFT3OD4_Y7iQgH_p6Xtnlb_32k"></script>
<script>
   grecaptcha.ready(function() {
        grecaptcha.execute('6LfXIOIZAAAAANLFT3OD4_Y7iQgH_p6Xtnlb_32k', {action:'validate_captcha'})
                  .then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
<script>
if(window.location.hash != "") {
  $("#method").val(window.location.hash.substring(1));
}

$("#formAddBalance").submit(function() {
$('button').prop('disabled', true);
    $.ajax({
           type: "POST",
           url: 'addBalanceAction',
           data: $("#formAddBalance").serialize(), // serializes the form's elements.
           success: function(data)
           {

             if (data == 01) {
              alert('Please enter a valid amount and Minimum of $5 for bitcoin / $10 for PM');
              $('button').prop('disabled', false);

             }


             if (data != 01 ) {
                $("#balance").html(data).show();
                pageDiv('payment'+data,'Add Balance - Odin SHOP','Payment?p_data='+data,1);
             }
           }
         });

    return false; // avoid to execute the actual submit of the form.
});

</script>

</div>
<script type="text/javascript">

    $(document).keydown(function(event){
        if(event.which=="17")
            cntrlIsPressed = true;
    });

    $(document).keyup(function(){
        cntrlIsPressed = false;
    });

    var cntrlIsPressed = false;


    $(window).on("popstate", function(e) {
        location.replace(document.location);

    });


    $(window).on('load', function() {
		$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
	   	pageDiv(13,'Add Balance - OdinShop','addBalance',1);
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
  setTimeout(function() {$(btn).tooltip('hide'); /*console.log("hide-2");*/}, 1000);
}
</script>

<div class="hiddendiv common"></div><div><div>Could not connect to the reCAPTCHA service. Please check your internet connection and reload to get a reCAPTCHA challenge.</div></div></body><div style="all: initial;"></div><div class="__chobitsu-hide__ luna-dom-highlighter luna-dom-highlighter-platform-mac"><canvas id="canvas" class="luna-dom-highlighter-fill" width="459" height="781" style="width: 459px; height: 781px;"></canvas><div></div></div></html>