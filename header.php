
<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login.html");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>
<html>
<head>
       <meta charset="utf-8">
        <link rel="shortcut icon" href="files/img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                       <title>FeluxShop</title>
                    
 <link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />



<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>



 <meta name="referrer" content="no-referrer" />







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

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
	success: function (data) {
					$("#mainDiv").html(data).show();
					var newTableObject = document.getElementById('table');
					if (newTableObject){
						sorttable.makeSortable(newTableObject);
						$(".sticky-header").floatThead({
							top: 60
						});
					}
					if (x == 0) {
						ajaxinfo();
					}
				}
			});
			if (typeof stopCheckBTC === 'function') {
				var a = stopCheckBTC();
			}

		}
*/
		$(window).on("popstate", function (e) {
			//location.replace(document.location);

		});

		$(window).on('load', function () {
	
			//pageDiv(1,'RDP - OluxShop','rdp.html', 1);
			//new ClipboardJS('.copyit');
			var clipboard = new ClipboardJS('.copyit');
			.on('success', function (e) {
				setTooltip(e.trigger, 'Copied!');
				hideTooltip(e.trigger);
				e.clearSelection();
			});

		});

		function setTooltip(btn, message) {
			$(btn).tooltip('hide')
				.attr('data-original-title', message)
				.tooltip('show');
		}

		function hideTooltip(btn) {
			setTimeout(function () {
				$(btn).tooltip('hide');
			}, 1000);
		}
</script>

		<style type="text/css">
			.dropdown:hover>.dropdown-menu {
  				display: block;
  				margin:0rem;
			}
			.dropdown > .dropdown-toggle:active {
   				pointer-events: none;
			}
			#mydiv  {
				height: 600px;
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
			body {
    			padding-top:75px;
			}
			table.floatThead-table {
			    border-top: none;
			    border-bottom: none;
			    background-color: #fff;
			    cursor: pointer;
			}
			table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
			    content: " \25BE" 
			}
		</style>


    </head>
    
    
