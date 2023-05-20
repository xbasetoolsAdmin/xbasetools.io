
<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <title>myTable</title>
  <link rel="stylesheet" href="layout/css/bootstrap.min.css" />
  <link rel="stylesheet" href="layout/css/main.css" />
  <link rel="stylesheet" href="layout/css/util.css" />
  <link rel="stylesheet" href="layout/css/all.min.css" />

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
 
    $(document).keydown(function(event) {
        if (event.which == "17")
            cntrlIsPressed = true;
    });
 
    $(document).keyup(function() {
        cntrlIsPressed = false;
    });
 
    var cntrlIsPressed = false;
 
 
    function pageDiv(n, t, u, x) {
        if (cntrlIsPressed) {
            window.open(u, '_blank');
            return false;
        }
        var obj = {
            Title: t,
            Url: u
        };
        if (("/" + obj.Url) != location.pathname) {
            if (x != 1) {
                history.pushState(obj, obj.Title, obj.Url);
            } else {
                history.replaceState(obj, obj.Title, obj.Url);
            }
 
        }
        document.title = obj.Title;
        $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
        $.ajax({
            type: 'GET',
            url: 'divPage' + n + '.html',
            success: function(data) {
                $("#mainDiv").html(data).show();
                newTableObject = document.getElementById('table');
                sorttable.makeSortable(newTableObject);
                $(".sticky-header").floatThead({
                    top: 60
                });
                if (x == 0) {
                    ajaxinfo();
                }
            }
        });
        if (typeof stopCheckBTC === 'function') {
            var a = stopCheckBTC();
        }
 
    }
 
    $(window).on("popstate", function(e) {
        location.replace(document.location);
 
    });
 
 
    $(window).on('load', function() {
        $('.dropdown').hover(function() {
            $('.dropdown-toggle', this).trigger('click');
        });
        pageDiv(7, 'Premium/Dating/Shopping - Xbaseleet', '', 1);
        var clipboard = new Clipboard('.copyit');
        clipboard.on('success', function(e) {
            setTooltip(e.trigger, 'Copied!');
            hideTooltip(e.trigger);
            e.clearSelection();
        });
 
    });
 
 
    function setTooltip(btn, message) {
        console.log("hide-1");
        $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
        console.log("show");
    }
 
    function hideTooltip(btn) {
        setTimeout(function() {
            $(btn).tooltip('hide');
            console.log("hide-2");
        }, 1000);
    }
</script>

</head>


<script>
 

<body>
  <nav class="navbar nabber-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">xbasetools</a>
      
      
    </div>
  </nav>
  
<style>
  
  
</style>










<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/jquery.datatables.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="layout/css/bootstrap.min.js"></script>
  <script src="component/accounts.js"></script>
  
  <script type=text/javascript">
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
    
    </script>
  
</body>
</html>