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
?>
<!doctype html>

<script>
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
        pageDiv(7, 'Premium/Dating/Shopping - JeruxShop', 'table.html', 1);
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
                <div class="navbar-brand" onClick="location.href='index.html'" onMouseOver="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Jerux SHOP <small><span class="glyphicon glyphicon-refresh"></span></small></b></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="topFixedNavbar1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - JeruxShop','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp"></span></a></li>
                            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - JeruxShop','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel"></span></a></li>
                            <li><a href="shell.html" onclick="pageDiv(3,'Shell - JeruxShop','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - JeruxShop','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer"></span></a></li>
                            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - JeruxShop','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="leads.html" onclick="pageDiv(6,'Leads - JeruxShop','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - JeruxShop','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium"></span></a></li>
                            <li><a href="banks.html" onclick="pageDiv(8,'Banks - JeruxShop','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks"></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - JeruxShop','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams"></span></a></li>
                            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - JeruxShop','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials"></span></a></li>
                        </ul>
                    </li>
 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://jerux.to/seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
                            </span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - JeruxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span> </span></a></li>
                            <li><a href="reports.html" onclick="pageDiv(12,'Reports - JeruxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> </span> </a></li>
 
                        </ul>
                    </li>
 
                    <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="setting.html" onclick="pageDiv(14,'Setting - JeruxShop','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li><a href="orders.html" onclick="pageDiv(15,'Orders - JeruxShop','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
                            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
 
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
    <div id="mainDiv">
 
