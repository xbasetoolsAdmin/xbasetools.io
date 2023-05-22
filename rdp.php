<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 
<?php
include"header.php";?>
<style>
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_paginate .paginate_button.disabled:active {
 
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    #rdp_data_filter {
        color: var(--font-color);
    }
 
    #rdp_data_length {
        color: var(--font-color);
    }
 
    #rdp_data_paginate {
        color: var(--font-color);
    }
 
    #rdp_data_info {
        color: var(--font-color);
    }
</style>
<body class="them">
<?php
include"navbar_header.php";
?>


    </nav>
 <?php include"ajax/rdp_data.php";?>

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
            pageDiv(6, 'RDPS-xbaseTools', 'RDPs', 1);
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
    
    
    <?php include"footer.php";?>
    
    
</body>
 
</html>

 
