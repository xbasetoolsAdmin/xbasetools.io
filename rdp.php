<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 
<?php
include"header.php";

?>
<style>
 .display td {
     background: 
var(--color-card); color: 
var(--font-color);
 }
 .dataTables_paginate 
.paginate_button.disabled:active { color: 
var(--font-color); } .alert-info {color: 
var(--color-info); background-color: 
var(--color-backinfo); border-color: 
var(--color-borderinfo);}
#rdp_item_filter { color: var(--font-color); }
#rdp_item_length { color: var(--font-color);}
#rdp_item_paginate { color: var(--font-color); }
#rdp_item_info { color: var(--font-color); }
</style>
<body class="them">
 <?php 



 include"navbar_header.php";



include"ajax/rdps_data.php";



?>
<script type="text/javascript">
  $(document).ready(function() {
 $('#rdp_item').DataTable({
 "lengthMenu": [
 [10, 25, 100, 500, -1],
  [10, 25, 100, 500, "All"] ],
'iDisplayLength': 1000,
            "aaSorting": []
                });
            });
$(document).keydown((function (o)
{
    "17" == o.which && !0
})), $(document).keyup((function ()
{
    !1
}));
$(window).on("popstate", (function (o)
{
    location.replace(document.location)
})), $(window).on("load", (function ()
{
    $(".dropdown").hover((function ()
    {
        $(".dropdown-toggle", this).trigger("click")
    })), pageDiv(7, "RDPS-xbaseTools", "RDPs", 1), new Clipboard(".copyit").on("success", (function (o)
    {
        var t, i;
        t = o.trigger, i = "Copied!", $(t).tooltip("hide").attr("data-original-title", i).tooltip("show")
            , function (o)
            {
                setTimeout((function ()
                {
                    $(o).tooltip("hide")
                }), 1e3)
            }(o.trigger), o.clearSelection()
    }))
}));
</script> <?php 



include"footer.php";



?>
</body>
 
</html>

 
