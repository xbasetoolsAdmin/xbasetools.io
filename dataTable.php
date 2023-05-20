<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />


<script src="files/js/jquery.js"></script>
<script src="files/bootstrap/3/js/bootstrap.js"></script>
<script src="files/js/sorttable.js"></script>
<script src="files/js/table-head.js"></script>
<script src="files/js/bootbox.min.js"></script>
<script src="files/js/clipboard.min.js"></script>

<script src="component/accounts.js"></script>





<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>JeruxShop</title>
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
    padding-top:50px;
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
  margin: auto; /* presto! */

}

   
    

</style>
<?php include "mainDiv.php";?>

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
function t() {
    $.ajax({
        type: "GET",
        url: "ajaxinfo.html",
        timeout: 1e4,
        success: function(t) {
            if ("01" != t) {
                t = JSON.parse(t);
                for (var e in t) $("#" + e).html(t[e]).show()
            } else window.location = "logout.html"
        }
    })
}
setInterval((function() {
    t()
}), 3e3), t(), $(document).keydown((function(t) {
    "17" == t.which && (e = !0)
})), $(document).keyup((function() {
    e = !1
}));
var e = !1;
$(window).on("popstate", (function(t) {
    location.replace(document.location)
})), $(window).on("load", (function() {
    $(".dropdown").hover((function() {
        $(".dropdown-toggle", this).trigger("click")
    })),
    function(o, i, n, l) {
        if (e) return window.open(n, "_blank"), !1;
        var a = {
            Title: i,
            Url: n
        };
        "/" + a.Url != location.pathname && (1 != l ? history.pushState(a, a.Title, a.Url) : history.replaceState(a, a.Title, a.Url)), document.title = a.Title, $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(), $.ajax({
            type: "GET",
            url: "divPage" + o + ".html",
            success: function(e) {
                $("#mainDiv").html(e).show(), newTableObject = document.getElementById("table"), sorttable.makeSortable(newTableObject), $("table").floatThead({
                    top: 60
                }), 0 == l && t()
            }
        }), "function" == typeof stopCheckBTC && stopCheckBTC()
    }(7, "Premium/Dating/Shopping - JeruxShop", "table.html", 1), new Clipboard(".copyit").on("success", (function(t) {
        var e, o;
        e = t.trigger, o = "Copied!", console.log("hide-1"), $(e).tooltip("hide").attr("data-original-title", o).tooltip("show"), console.log("show"),
        function(t) {
            setTimeout((function() {
                $(t).tooltip("hide"), console.log("hide-2")
            }), 1e3)
        }(t.trigger), t.clearSelection()
    }))
})), $("#filterbutton").click((function() {
    $("#table tbody tr").each((function() {
        var t = $.trim($(this).find("#account_country").text().toLowerCase()),
            e = $.trim($(this).find("#account_sitename").text().toLowerCase()),
            o = $.trim($(this).find("#account_seller").text().toLowerCase()),
            i = $.trim($('select[name="account_country"]').val().toLowerCase()),
            n = $.trim($('input[name="account_sitename"]').val().toLowerCase()),
            l = $.trim($('select[name="account_seller"]').val().toLowerCase());
            
        t != i && "" != i || -1 == e.indexOf(n) || o != l && "" != l ? $(this).hide() : $(this).show()
        
    })), 
    $("#filterbutton").prop("disabled", !0) })), 
    $(".filterselect").change((function() {
    $("#filterbutton").prop("disabled", !1) })),
    $(".filterinput").keyup((function() {
    $("#filterbutton").prop("disabled", !1)
}));
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
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
