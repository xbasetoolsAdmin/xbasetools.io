


<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 


    <div class="row m-3 pt-1" style="color: var(--font-color);">
    

        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>

            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
            <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>


            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
            <select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>


            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
            <label for="ram" style="margin-bottom: 10px; margin-top: 5px">Ram :</label>
            <input type="search" class="form-control" id="ram" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="type" style="margin-bottom: 10px">Type :</label>
            <select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>


            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="access" style="margin-bottom: 10px; margin-top: 5px">Access :</label>
            <select name="access" id="access" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="ADMIN">ADMIN</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>

            </select>
        </div>
    </div>
        <div style="padding-left:20px; display:inline-block; margin-bottom:10px">
    <div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive" id="mainDiv">
            <table id="rdp_item" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
        <th data-priority="1"></th>
          <th class="all">ID</th>
      <th data-priority="3">Country</th>
                        <th data-priority="15">State</th>
                    <th data-priority="14">Windows</th>
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
    
 

        <span><a href="addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>
        <span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>
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
    