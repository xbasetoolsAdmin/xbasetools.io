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
        <div style="padding-left:20px; display:inline-block; margin-bottom:10px">
    <div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive" id="mainDiv">
            <table id="rdp_item" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
        <th data-priority="1"></th>
          <th class="all">ID</th>
      <th data-priority="3">Country</th>
    <th data-priority="15">State</th>           <th data-priority="14">Windows</th>
                        <th data-priority="6">Ram</th>
                        <th data-priority="17">Access</th>
                        <th data-priority="8">Hosting</th>
                        <th data-priority="9">CPU</th>
                        <th data-priority="11">Seller</th>
                        <th data-priority="12">Source</th>
                        <th data-priority="13">Price</th>
                       <th data-priority="16">Added on</th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="mainDiv"></div>
    <script type="text/javascript">
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
            pageDiv(7, 'Add Balance - OdinShop', 'addBalance', 1);
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
    </script>
 <?php 



include"footer.php";



?>
</body>
 
</html>

 
