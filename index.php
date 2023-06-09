<?php 
ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); 
?>

<!DOCTYPE html>

<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
    <meta name="revisit-after" content="2 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <title>OdinShop</title>
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <script src="layout/js/jquery-3.4.1.min.js"></script>
    <script src="layout/js/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
    <script src="layout/js/bootbox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="layout/css/flags.css" />
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
 
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
 
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    </script>
    <link rel="stylesheet" href="layout/css/all.min.css" />
    <link rel="stylesheet" href="layout/css/main.css?v=12.9" />
    <link rel="stylesheet" href="layout/css/util.css" />
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="layout/js/main.js"></script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    </style>
</head>
<style>
    .navbar-nav .dropdown-menu {
        margin: 0 !important
    }
 
    .theme-light {
        --color-primary: #0060df;
        --color-secondary: #ffffff;
        --color-secondary2: #ecf0f1;
        --color-accent: #fd6f53;
        --font-color: #000000;
        --color-nav: #ffffff;
        --color-dropdown: #ffffff;
        --color-card: #ffffff;
        --color-card2: #d1ecf1;
        --color-info: #0c5460;
        --color-backinfo: #d1ecf1;
        --color-borderinfo: #bee5eb;
 
    }
 
    .theme-dark {
        --color-primary: #17ed90;
        --color-secondary: #353B50;
        --color-secondary2: #353B50;
        --color-accent: #12cdea;
        --font-color: #ffffff;
        --color-nav: #363947;
        --color-dropdown: rgba(171, 205, 239, 0.3);
        --color-card: #262A37;
        --color-card2: #262A37;
        --color-info: #4DD0E1;
        --color-backinfo: #262A37;
        --color-borderinfo: #262A37;
    }
 
    .them {
 
        background: var(--color-secondary);
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
 
    .them h1 {
        color: var(--font-color);
        font-family: sans-serif;
    }
 
    .card-body {
        color: var(--font-color);
    }
 
    .them button {
        color: var(--font-color);
        background-color: #ffffff;
        padding: 10px 20px;
        border: 0;
        border-radius: 5px;
    }
 
    .navbar.navbar-light .navbar-toggler {
        color: var(--font-color);
    }
 
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
 
    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
 
    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }
 
    .slider:before {
        position: absolute;
        content: "";
        height: 40px;
        width: 40px;
        left: 0px;
        bottom: 4px;
        top: 0;
        bottom: 0;
        margin: auto 0;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        box-shadow: 0 0px 15px #2020203d;
        background: white url('https://i.ibb.co/FxzBYR9/night.png');
        background-repeat: no-repeat;
        background-position: center;
    }
 
    input:checked+.slider {
        background-color: #2196f3;
    }
 
    input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
    }
 
    input:checked+.slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(24px);
        transform: translateX(24px);
        background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
        background-repeat: no-repeat;
        background-position: center;
    }
 
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
 
    .slider.round:before {
        border-radius: 50%;
    }
</style>
<script>
    function setTheme(themeName) {
        localStorage.setItem('theme', themeName);
        document.documentElement.className = themeName;
    }
 
    // function to toggle between light and dark theme
    function toggleTheme() {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-light');
        } else {
            setTheme('theme-dark');
        }
    }
 
    // Immediately invoked function to set the theme on initial load
    (function() {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-dark');
            document.getElementById('slider').checked = false;
        } else {
            setTheme('theme-light');
            document.getElementById('slider').checked = true;
        }
    })();
</script>
<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">
    <a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
                    Hosts
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">46</span></span></a>
                    <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">17125</span></span></a>
                    <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1848</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>
                Banks Logs
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>USA Bank Logs <span class="badge badge-primary">1066</span></span></a>
                    <a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> UK Bank Logs <span class="badge badge-primary">5980</span></span></a>
                    <a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Canada Banks Logs <span class="badge badge-primary">8</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
                    Send
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">394</span></span></a>
                    <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">2567</span></span></a>
                </div>
            </li>
 
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="leads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
                </div>
            </li>
 
 
 
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 86</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown">
                <a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
            </li>
        </ul>
 
        <ul class="navbar-nav profile">
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                    <a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a>
                </div>
            </li>
 
            <li class="nav-item">
                <a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
                        0
                        <span class="px-2"><i class="fa fa-plus"></i></span></span>
                </a>
            </li>
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                    <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
                    <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
                    <a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
                    <a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
                </div>
            </li>
 
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> XBASELEET <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                    <a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
                    <a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
                    <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
                    <a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
                    <a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
                </div>
            </li>
 
        </ul>
 
    </div>
</nav>
<style>
    .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,
    .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body {
        padding-top: 35px;
    }
 
    .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,
    .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
        max-width: 500px !important;
        margin: 1.75rem auto !important;
        position: relative;
        width: auto !important;
        pointer-events: none;
    }
 
    a.closearb {
        position: absolute;
        top: 2.5px;
        right: 2.5px;
        display: block;
        width: 30px;
        height: 30px;
        text-indent: -9999px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==); }
</style>
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<style>
    .scroll-area-lg {
        height: 400px;
        overflow-x: hidden;
    }
 
    .scrollbar-sidebar,
    .scrollbar-container {
        position: relative;
        height: 100%;
    }
 
    .ps {
        overflow: hidden !important;
        overflow-anchor: none;
        touch-action: auto;
    }
 
    .heading {
        font-size: 16px;
        font-weight: bold;
    }
 
    .fa-plus-circle {
        color: green;
    }
 
    #tour {
        font-family: 'Raleway', sans-serif;
    }
</style>
 
<body class="them loading">
    <link rel="stylesheet" href="/layout/css/flexslider5.css" type="text/css">
    <script src="/layout/js/jquery.flexslider-min.js"></script>
    <style>
        #tour {
            font-family: 'Raleway', sans-serif;
        }
 
        #tour .flexslider {
            margin: 0 0 60px;
            background: #fff;
            border: 0px solid #fff;
            position: relative;
            zoom: 0;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            -webkit-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            -o-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
        }
 
 
 
        #tour .flex-control-paging li a {
            width: 11px;
            height: 11px;
            display: block;
            background: #fff !important;
            border: 1px solid #3c8dbc;
            background: rgba(0, 0, 0, 0.5);
            cursor: pointer;
            text-indent: -9999px;
            -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -moz-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -o-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }
 
        #tour .flex-control-paging li a.flex-active {
            background: #3c8dbc !important;
        }
 
        #tour .modal-body {
            padding: 0px;
        }
 
        #tour .modal-footer {
            background: #fafafa;
            border: 0px;
        }
 
        #tour .flex-caption {
            padding: 20px 100px 20px 100px;
            text-align: center;
        }
 
        #tour .flex-caption .heading {
            font-weight: 600;
            font-size: 20px;
            color: #505050;
            padding-bottom: 15px;
        }
 
        #tour .flex-caption .caption-content {
            font-size: 15px;
            color: #505050;
        }
    </style>
 
    <div class="modal fade top" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyTicket" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay ticket</span>
                        <a type="button" href="tickets" class="btn btn-success">Show tickets
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalrep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
                        <a type="button" href="reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalreps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new report</span>
                        <a type="button" href="./seller/reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
 
    <div class="modal fade top" id="modalrepss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
                        <a type="button" href="./seller/reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
    <div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
        <div class="p-2"><label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label></div>
    </div>
    <script defer src="/layout/js/jquery.flexslider.js"></script>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="shell"><img style="border: 3px solid;" src="layout/images/shells.gif"></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="smtp"><img style="border: 3px solid;" src="layout/images/smtps.gif"></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="accounts-7"><img style="border: 3px solid;" src="layout/images/accs.gif"></a></div>
            </div><br>
            <div class="header-body">
 
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            0 </span>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-money-bill-alt "></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="addBalance"> [Add Funds] </a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
                                        <span class="h2 font-weight-bold mb-0">0
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="orders"> [ Show ] </a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Tickets</h5>
                                        <span class="h2 font-weight-bold mb-0">0
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="tickets"> [ Show ]</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats" style="background-color: #fb3!important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Reports</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            0 <span>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-receipt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="reports"> [ Show ]</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
 
            <div class="main-home mt-5 mb-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-user-shield"></i>
                                Welcome <a class="badge badge-pill badge-success">XBASELEET</a><br>
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <br>
                                If you have any Question ,Problem, Suggestion or Request Please feel free to Open a
                                <a href="tickets" class="btn btn-success btn-sm"> New Ticket <i class="fa fa-paper-plane"></i></a>
                                <br>
                                if you want to report an order , just go to <a class="btn btn-success btn-sm" data-title="My Orders" href="orders"> My Orders <i class="fa fa-shopping-cart"></i></a> then click on Report #[Order Id] button.
                                <br>
                                Our Domains are <p><span style="color: #ff0000;"><strong>odinshop.io</strong> || <strong>odin.pw</strong> || <strong>odinshop.se</strong> || <strong>odin.pm</strong> ||</span><strong><span style="color: #ff0000;">Tor Mirror odinshoyi3y5clejn3klyggxrmq5sy5efdiremz353z6ucdujgdiccad.onion ||</span> </strong></p> - Please Save them!
                                <br>
                                <a href="https://odinshop.se/Tos.php" data-title="Terms Of Service " class="btn btn-primary btn-sm"> Terms Of Service <i class="fa fa-newspaper-o"></i></a>
                                <br>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Invite Users<br>
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="input-group mb-3" style="align-items: center;">
                                            <input type="text" class="form-control form-control-lg" id="code_user" value="https://odinshop.io/?referral=20038" disabled>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary copydiv" data-clipboard-text="https://odinshop.io/?referral=20038" type="button">COPY</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
                                        <p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Bonus :- </p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
                                        <p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Referrals :- 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-newspaper"></i>
                                Our News
                            </div>
                            <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                <ul>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2023/05/19 01:09:56</small></span></b>
                                        <br>Limited Time offer Credit 500$+ and enjoy 20% bonus
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2023/03/01 05:13:01</small></span></b>
                                        <br>New Premium Section Available Best for SEO Users , now you have the Ability to see the full domain and server info before purchase + many more Features Check it out in the premium section , More Features will be added to it soon
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2022/08/24 06:56:08</small></span></b>
                                        <br>We are currently working to improve the checkers in all sections ,, stay tuned good things are coming.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>New section</b></span><span><small><b>2022/08/02 09:30:54</small></span></b>
                                        <br>Bulk Offers Section has been activated ,, you can buy bulk tools with cheap prices 50% Off, Visit our new section and enjoy the sellers offers.
                                        https://odinshop.io/offers
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Report time</b></span><span><small><b>2022/07/29 01:18:06</small></span></b>
                                        <br>Dear Buyers
                                        report/refund time increased to 12hours to give our buyers time to report their bad items, also please rate your purchases to help other buyers and help us to flag the bad sellers and remove them from our platform
                                        we are here to serve you ,If you have any questions , please don't hesitate to contact us if you have any problem with one of our sellers message us.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Seller apply</b></span><span><small><b>2022/02/03 07:07:04</small></span></b>
                                        <br>now you can upgrade your account to seller status and start selling with us instantly without support tickets,,for more information visit https://odinshop.io/become-seller
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Requests</b></span><span><small><b>2021/11/20 08:39:24</small></span></b>
                                        <br>Odin's offers you the peace of mind you need to make any purchase. We’ll not release the funds to the Seller until you have received the item and are satisfied with the transaction. We also make sure the Seller provides the required information for the transaction.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/11/06 08:43:23</small></span></b>
                                        <br>Now you can rate \ review \ comment about the item you've purchased go to MyOrders or Report Items and choose Rate Seller and submit your comment / rate ,, rating will help other clients to easily find the good sellers you can also check the seller's profile by clicking on seller's number button in blue color inside of sections
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/08/03 07:52:03</small></span></b>
                                        <br>CMS / Technology detectors installed in cPanel & Shell sections to extract the platform [ Wordpress - Joomla - Drupal - WooCommerce - etc.. ] and extract back side technologies such as [ Laravel - Codeigniter - Yii - Zend - Vue JS - React Js - etc.. ] plus extract Server Technologies such as [ Apache - Nginx - MySQL - Tomcat - etc..] and more updates coming soon.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Email</b></span><span><small><b>2020/10/14 04:57:06</small></span></b>
                                        <br>Dear users please use a VALID email in your profile incase you lost your password so you can recover it.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Warning</b></span><span><small><b>2020/04/06 06:18:01</small></span></b>
                                        <br>Orders will be automatically refunded after 6hours of the report time if the seller didnt replay.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Free bonus $</b></span><span><small><b>2020/03/17 06:14:10</small></span></b>
                                        <br>every time your deposit starts from $50 you will receive a 5% bonus.
                                        <br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 pb-1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="added-tab" data-toggle="tab" data-target="#added" type="button" role="tab" aria-controls="added" aria-selected="true">Latest Added Tools</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sold-tab" data-toggle="tab" data-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Latest Sold Tools</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  show active" id="added" role="tabpanel" aria-labelledby="added-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Tools
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>9</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="smtp">
                                                                            smtp </a></b></font> section.
                                                                By <b>Seller463</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>25</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="business-1">
                                                                            Cpanel Webmail </a></b></font> section.
                                                                By <b>Seller463</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>304</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller376</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>5</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller425</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>10</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="mailer">
                                                                            mailer </a></b></font> section.
                                                                By <b>Seller389</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>20</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller393</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>8</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller389</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>22</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="shell">
                                                                            shell </a></b></font> section.
                                                                By <b>Seller389</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>62</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="shell">
                                                                            shell </a></b></font> section.
                                                                By <b>Seller382</b>, 2023-05-22 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>16</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller465</b>, 2023-05-22 </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Sold Tools
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller425</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">premium_cpanel</a></b></font> To <b>Buyer20213</b>, 2023-05-22 12:39:38
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller482</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="leads-3">ComboUsernamepassword</a></b></font> To <b>Buyer12782</b>, 2023-05-22 12:31:20
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer15241</b>, 2023-05-22 12:25:53
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer15241</b>, 2023-05-22 12:25:13
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer15974</b>, 2023-05-22 11:48:29
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16984</b>, 2023-05-22 11:47:27
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer21878</b>, 2023-05-22 11:34:00
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18870</b>, 2023-05-22 11:25:24
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer21878</b>, 2023-05-22 11:22:12
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-05-22 11:06:15
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 pb-1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="offer-tab" data-toggle="tab" data-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Latest Sellers Offers</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="request-tab" data-toggle="tab" data-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Latest Buyers Requests</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Sellers Offers
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>100 mixed shells</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 19/01/2023 05:15:10 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Fully Verified CashApp Account BTC Enable</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller466</b>, 02/01/2023 12:56:28 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Fully Verified Wise Account [Business] [id+pass+email+documents]</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller466</b>, 02/01/2023 12:51:15 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>ETH, BSC, MATIC Drainer</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller455</b>, 03/11/2022 06:41:27 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Creation of PMTA and SMTP for turnkey distribution</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller455</b>, 03/11/2022 06:37:35 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>ETH Drainer</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 04/10/2022 08:05:59 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>20 cpanels mixed country</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 26/09/2022 03:10:22 pm </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Buyers Requests
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Office 365</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer10605</b>, 2023/05/21 17:18:08 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Webmails - cPanel</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer21686</b>, 2023/05/14 03:15:24 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>I want to buy a paid or unpaid zoominfo account</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer12709</b>, 2023/05/12 09:17:40 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>.EDU ADMIN</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer15241</b>, 2023/05/07 02:00:20 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>[WTB] subdomain creation access to high authority websites</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer21446</b>, 2023/05/04 05:11:34 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Netflix account needed</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer16482</b>, 2023/04/30 15:13:27 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>KAGOYA SMTO</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer15241</b>, 2023/04/26 21:18:19 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Accounts/No MFA for passport.aliyun.com</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer7560</b>, 2023/04/04 19:30:12 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Tinder gold account</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer16482</b>, 2023/04/02 17:15:46 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Workspace Godaddy Webmail</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer19074</b>, 2023/03/16 01:34:16 am </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 pb-1" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fab fa-btc"></i>
                                Become Seller
                            </div>
                            <div class="card-body payment_methods" style="color: var(--font-color); background-color: var(--color-card);">
                                Interested in becoming a <b>Seller <i class="fab fa-btc">
                                    </i></b> at OdinShop ?
                                <a href="become-seller" class="btn btn-primary">
                                    Become a Seller & Seller Rules<i class="fab fa-btc"></i>
                                </a>
                                <br><br>
                                Available Payment Methods
                                <br>
                                <a href="addBalance"><img src="layout/images/pmlogo2.png" height="48" width="49" title="PerfectMoney" /></a>
                                <a href="addBalance"><img src="layout/images/btclogo.png" height="48" width="49" title="Bitcoin" /></a>
                                <a href="addBalance"><img src="layout/images/ltclogo.png" height="48" width="49" title="Litecoin" /></a>
                                <a href="addBalance"><img src="layout/images/bnb.png" height="48" width="49" title="Binance Token" /></a>
                                <a href="addBalance"><img src="layout/images/ethereum.png" height="48" width="49" title="Etherum" /></a>
                                <a href="addBalance"><img src="layout/images/trc.png" height="48" width="49" title="Tether [USDT/TRC20]" /></a>
                                <a href="addBalance"><img src="layout/images/bch.png" height="48" width="49" title="Bitcoin Cash" /></a>
                                <a href="addBalance"><img src="layout/images/dgc.jpg" height="48" width="49" title="Dogecoin" /></a>
                                <a href="addBalance"><img src="layout/images/monero.png" height="48" width="49" title="Monero" /></a>
                                <a href="addBalance"><img src="layout/images/erc20.png" height="58" width="59" title="USDT.ERC20" /></a>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-chart-pie"></i>
                                Our Stuff
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                        </div>
                                    </div>
                                </div>
                                <canvas id="myPieChart" width="278" height="278" style="display: block; width: 278px; height: 278px;" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer small text-primary" style="color: var(--font-color); background-color: var(--color-card);">Page Loaded in 1.0675 Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
 
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk.to/60bb67b9dd60a20abbe4bab4/1f7e0qbvo';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();
            </script>
 
            <script type="text/javascript" src="layout/js/Chart.min.js"></script>
            <script>
                var clipboard = new Clipboard('.copydiv');
            </script>
            <script type="text/javascript">
                // Set new default font family and font color to mimic Bootstrap's default styling
                Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                Chart.defaults.global.defaultFontColor = '#2196F3';
 
                // Pie Chart Example
                var ctx = document.getElementById("myPieChart");
                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['cPanels [17125]', 'Leads [242]', 'Shells [1848]', 'RDPs [46]', 'Mailers [394]', 'Scripts [3]', 'Tutorials [1]', 'Accounts [1632]', 'SMTPs [2567]', 'Webmails [20992]', 'FTPs [96]', 'SSH [133]'],
                        datasets: [{
                            data: ['17125', '242', '1848', '46', '394', '3', '1', '1632', '2567', '20992', '96', '133'],
                            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#e1297d', '#551a8b', '#D5B0F7', '#B5D2ED', '#212529', '#256633', '#633256', '#97de12'],
                        }],
                    },
 
                    options: {
                        cutoutPercentage: 50,
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var dataset = data.datasets[tooltipItem.datasetIndex];
                                    var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                                    var total = meta.total;
                                    var currentValue = dataset.data[tooltipItem.index];
                                    var percentage = parseFloat((currentValue / total * 100).toFixed(1));
                                    return currentValue + ' (' + percentage + '%)';
                                },
                                title: function(tooltipItem, data) {
                                    return data.labels[tooltipItem[0].index];
                                }
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</body>
</html>