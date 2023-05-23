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
    <title>SMTP</title>
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
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_wrapper .dataTables_paginate .paginate_button {
 
        color: var(--font-color);
 
    }
 
    #smtp_data_paginate .paginate_button {
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    #smtp_data_filter {
        color: var(--font-color);
    }
 
    #smtp_data_length {
        color: var(--font-color);
    }
 
    #smtp_data_paginate {
        color: var(--font-color);
    }
 
    #smtp_data_info {
        color: var(--font-color);
    }
</style>
 
<body class="them">
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
                        <a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">44</span></span></a>
                        <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">17146</span></span></a>
                        <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1939</span></span></a>
                        <a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">133</span></span></a>
                    </div>
                </li>
 
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="premium_shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">1074</span></span></a>
                        <a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">6049</span></span></a>
                        <a class="dropdown-item" href="premium_downloads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Downloads <span class="badge badge-primary">8</span></span></a>
                    </div>
                </li>
 
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
                        Send
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">397</span></span></a>
                        <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">2648</span></span></a>
                    </div>
                </li>
 
 
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="leads-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
                        <a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">163</span></span></a>
                        <a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">22</span></span></a>
                        <a class="dropdown-item" href="leads-3" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">0</span></span></a>
                        <a class="dropdown-item" href="leads-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">22</span></span></a>
                        <a class="dropdown-item" href="leads-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">31</span></span></a>
                        <a class="dropdown-item" href="leads-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
                        <a class="dropdown-item" href="leads-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
                        <a class="dropdown-item" href="leads-9" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
                    </div>
                </li>
 
 
 
 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 88</span></span></a>
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
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
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
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
        }
    </style>
    <div class="d-flex flex-row-reverse mt-0">
        <div class="p-2">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round">
                </span>
            </label>
        </div>
    </div>
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>To Check The SMTP ( Deliver or not ) , Click on Send ( For Free ) Then Check Your Testing E-mail.</li>
            <li>There is <b> 2648 </b> SMTPs Available.</li>
        </ul>
    </div>
    <ul class="nav nav-tabs m-2 container">
        <li class="active m-2"><a href="#mytickets" class="btn btn-primary btn-sm" data-toggle="tab" aria-expanded="true" style="font-size: 12 px;">SMTP Data</a></li>
        <li class="m-2"><a href="#open" class="btn btn-primary btn-sm" data-toggle="tab" aria-expanded="false" style="font-size: 12 px;"> <span class="glyphicon glyphicon-pencil"></span> Change Email</a></li>
    </ul>
    <div id="myTabContent" class="tab-content container-fluid">
        <div class="tab-pane fade in" id="open" style="color: var(--font-color);">
            <h3 class="text-center alert alert-success">Checker Email</h3>
            <div class="row">
                <div class="form-group col-md-5" style="color: var(--font-color); background-color: var(--color-card);">
                    <form method='post' class="col-lg-12">
                        <label for="c_email">Checker Email </label>
                        <input type="email" name="c_email" id="c_email" class="form-control mt-2 mb-2 input-sm" value="hustlersfather@gmail.com" required /><button type='submit' name="edit" class='btn btn-primary'>Change</button>
                    </form>
                    <br><br>
                    <div id="resulta"> </div>
                </div>
                <br><br>
            </div>
        </div>
        <div class="tab-pane active in" id="mytickets">
            <div class="row m-3 pt-1" style="color: var(--font-color);">
                <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
                    <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
                    <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All Countries</option>
                        <option value=""></option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Czechia">Czechia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="France">France</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Italy">Italy</option>
                        <option value="Laos">Laos</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Poland">Poland</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Singapore">Singapore</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Vietnam">Vietnam</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
                    <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
                    <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value=""></option>
                        <option value="24 SHELLS">24 SHELLS</option>
                        <option value="A2 Hosting, Inc.">A2 Hosting, Inc.</option>
                        <option value="Advanced Online Solutions, Inc.">Advanced Online Solutions, Inc.</option>
                        <option value="Akamai Technologies, Inc.">Akamai Technologies, Inc.</option>
                        <option value="ALGAR TELECOM S/A">ALGAR TELECOM S/A</option>
                        <option value="Alibaba Cloud">Alibaba Cloud</option>
                        <option value="Allied It Infrastructure And Services Pvt Ltd">Allied It Infrastructure And Services Pvt Ltd</option>
                        <option value="AltusHost B.V.">AltusHost B.V.</option>
                        <option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option>
                        <option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option>
                        <option value="Aptum Technologies">Aptum Technologies</option>
                        <option value="Aruba S.p.A.">Aruba S.p.A.</option>
                        <option value="Arvid Logicum OU">Arvid Logicum OU</option>
                        <option value="Astaroth Media Inc">Astaroth Media Inc</option>
                        <option value="Athenix Inc.">Athenix Inc.</option>
                        <option value="Atlantic Metro Communications II, Inc.">Atlantic Metro Communications II, Inc.</option>
                        <option value="Awareness Software Limited">Awareness Software Limited</option>
                        <option value="Bahri, Saipul">Bahri, Saipul</option>
                        <option value="Broadband Systems Corporation">Broadband Systems Corporation</option>
                        <option value="Cable & Wireless (Seychelles) Ltd">Cable & Wireless (Seychelles) Ltd</option>
                        <option value="Cambrium IT Services B.V.">Cambrium IT Services B.V.</option>
                        <option value="Canonical range for prod_804">Canonical range for prod_804</option>
                        <option value="CENTRO DE ENSINO UNIFICADO DE BRASILIA">CENTRO DE ENSINO UNIFICADO DE BRASILIA</option>
                        <option value="Charter Communications Inc">Charter Communications Inc</option>
                        <option value="ColoCrossing">ColoCrossing</option>
                        <option value="Contabo Asia Private Limited">Contabo Asia Private Limited</option>
                        <option value="Contabo GmbH">Contabo GmbH</option>
                        <option value="Contabo Inc.">Contabo Inc.</option>
                        <option value="CORPORACION NACIONAL DE TELECOMUNICACIONES - CNT EP">CORPORACION NACIONAL DE TELECOMUNICACIONES - CNT EP</option>
                        <option value="CtrlS">CtrlS</option>
                        <option value="Cyber Internet Services (Private) Limited">Cyber Internet Services (Private) Limited</option>
                        <option value="Datacamp Limited">Datacamp Limited</option>
                        <option value="DCV SERVICOS DE LOCACAO DE MAQUINAS E EQUIPAMENTOS">DCV SERVICOS DE LOCACAO DE MAQUINAS E EQUIPAMENTOS</option>
                        <option value="DediPath">DediPath</option>
                        <option value="DHINA TECHNOLOGIES">DHINA TECHNOLOGIES</option>
                        <option value="DIGITAL SNAP">DIGITAL SNAP</option>
                        <option value="DigitalOcean, LLC">DigitalOcean, LLC</option>
                        <option value="Dimension Data">Dimension Data</option>
                        <option value="DISKOMINFO PROV. JAWA TENGAH">DISKOMINFO PROV. JAWA TENGAH</option>
                        <option value="Doruk Iletisim ve Otomasyon Sanayi ve Ticaret A.S.">Doruk Iletisim ve Otomasyon Sanayi ve Ticaret A.S.</option>
                        <option value="Dot Enterprise Co.,Ltd.">Dot Enterprise Co.,Ltd.</option>
                        <option value="dragonhispeed">dragonhispeed</option>
                        <option value="Dreamscape Networks PTY LTD">Dreamscape Networks PTY LTD</option>
                        <option value="EASYHOST SRL">EASYHOST SRL</option>
                        <option value="EMAX GLOBAL MEDIA PVT. LTD">EMAX GLOBAL MEDIA PVT. LTD</option>
                        <option value="ENDURANCE WEB SOLUTIONS PRIVATE LIMITED">ENDURANCE WEB SOLUTIONS PRIVATE LIMITED</option>
                        <option value="ENGETRONICS INTERNET DATACENTER">ENGETRONICS INTERNET DATACENTER</option>
                        <option value="ExonHost">ExonHost</option>
                        <option value="Francisco Dias">Francisco Dias</option>
                        <option value="G-Core Labs S.A.">G-Core Labs S.A.</option>
                        <option value="GBLINK NETWORK SOLUTIONS PRIVATE LIMITED">GBLINK NETWORK SOLUTIONS PRIVATE LIMITED</option>
                        <option value="GDY-US-EAST">GDY-US-EAST</option>
                        <option value="Ghana Telecommunications Company Limited">Ghana Telecommunications Company Limited</option>
                        <option value="GMO-Z.com Runsystem Joint Stock Company">GMO-Z.com Runsystem Joint Stock Company</option>
                        <option value="Go Daddy Netherlands B.V.">Go Daddy Netherlands B.V.</option>
                        <option value="Godaddy.com">Godaddy.com</option>
                        <option value="GoDaddy.com, LLC">GoDaddy.com, LLC</option>
                        <option value="H4Y Technologies LLC">H4Y Technologies LLC</option>
                        <option value="H88 WEB HOSTING S.R.L.">H88 WEB HOSTING S.R.L.</option>
                        <option value="HaiSoft SARL">HaiSoft SARL</option>
                        <option value="Handy Networks, LLC">Handy Networks, LLC</option>
                        <option value="Hetzner Online GmbH">Hetzner Online GmbH</option>
                        <option value="HIVELOCITY, Inc.">HIVELOCITY, Inc.</option>
                        <option value="Host Department NJ, LLC">Host Department NJ, LLC</option>
                        <option value="Host Europe GmbH">Host Europe GmbH</option>
                        <option value="Host Papa Inc.">Host Papa Inc.</option>
                        <option value="Host Papa, Inc.">Host Papa, Inc.</option>
                        <option value="HostDime.com, Inc.">HostDime.com, Inc.</option>
                        <option value="Hostgator.com LLC">Hostgator.com LLC</option>
                        <option value="Hosting Ukraine LTD">Hosting Ukraine LTD</option>
                        <option value="Hostinger International Limited">Hostinger International Limited</option>
                        <option value="Hostopia Australia Web Pty Ltd">Hostopia Australia Web Pty Ltd</option>
                        <option value="HostPapa">HostPapa</option>
                        <option value="HostRocket Web Services">HostRocket Web Services</option>
                        <option value="Hostwinds LLC.">Hostwinds LLC.</option>
                        <option value="Hurricane Electric LLC">Hurricane Electric LLC</option>
                        <option value="Hydra Communications Ltd">Hydra Communications Ltd</option>
                        <option value="I.C.S. Trabia-Network S.R.L.">I.C.S. Trabia-Network S.R.L.</option>
                        <option value="iConvergence">iConvergence</option>
                        <option value="INCUBATEC GmbH - Srl">INCUBATEC GmbH - Srl</option>
                        <option value="Infomaniak Network SA">Infomaniak Network SA</option>
                        <option value="InMotion Hosting, Inc.">InMotion Hosting, Inc.</option>
                        <option value="Institute of Technology Bandung">Institute of Technology Bandung</option>
                        <option value="INTERCONECT TELEINFORMATICA EIRELI">INTERCONECT TELEINFORMATICA EIRELI</option>
                        <option value="InterNet Services, Telecom Fiji Ltd.">InterNet Services, Telecom Fiji Ltd.</option>
                        <option value="Interserver, Inc">Interserver, Inc</option>
                        <option value="Ionis Group - Ionis Schools of Technology and Management SAS">Ionis Group - Ionis Schools of Technology and Management SAS</option>
                        <option value="IONOS SE">IONOS SE</option>
                        <option value="IPXO LLC">IPXO LLC</option>
                        <option value="iWeb Technologies Inc.">iWeb Technologies Inc.</option>
                        <option value="John Smith">John Smith</option>
                        <option value="Jumpline Inc">Jumpline Inc</option>
                        <option value="Keyweb AG">Keyweb AG</option>
                        <option value="Krystal Hosting Ltd">Krystal Hosting Ltd</option>
                        <option value="Lao Telecommunication Co Ltd">Lao Telecommunication Co Ltd</option>
                        <option value="Leaseweb Deutschland GmbH">Leaseweb Deutschland GmbH</option>
                        <option value="LeaseWeb Network B.V.">LeaseWeb Network B.V.</option>
                        <option value="LEASEWEB UK LIMITED">LEASEWEB UK LIMITED</option>
                        <option value="Leaseweb USA, Inc.">Leaseweb USA, Inc.</option>
                        <option value="Level 3 Parent, LLC">Level 3 Parent, LLC</option>
                        <option value="LightWave Networks">LightWave Networks</option>
                        <option value="Limestone Networks, Inc.">Limestone Networks, Inc.</option>
                        <option value="Linode, LLC">Linode, LLC</option>
                        <option value="Liquid Web, L.L.C">Liquid Web, L.L.C</option>
                        <option value="Locaweb Serviï¿½os de Internet S/A">Locaweb Serviï¿½os de Internet S/A</option>
                        <option value="M247 Europe SRL">M247 Europe SRL</option>
                        <option value="Mantra Tech Ventures Pvt Ltd">Mantra Tech Ventures Pvt Ltd</option>
                        <option value="Media Temple, Inc.">Media Temple, Inc.</option>
                        <option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option>
                        <option value="Ministry of Finance, Government of Nepal">Ministry of Finance, Government of Nepal</option>
                        <option value="Name Hero, LLC">Name Hero, LLC</option>
                        <option value="Namecheap, Inc.">Namecheap, Inc.</option>
                        <option value="National Agency for Network Services">National Agency for Network Services</option>
                        <option value="Netia SA">Netia SA</option>
                        <option value="Netinternet Bilisim Teknolojileri AS">Netinternet Bilisim Teknolojileri AS</option>
                        <option value="NetMagic Solutions Pvt Ltd">NetMagic Solutions Pvt Ltd</option>
                        <option value="Network Data Center Host, Inc.">Network Data Center Host, Inc.</option>
                        <option value="Neubox">Neubox</option>
                        <option value="New Dream Network, LLC">New Dream Network, LLC</option>
                        <option value="Newfold Digital, Inc.">Newfold Digital, Inc.</option>
                        <option value="NewMedia Express Pte Ltd">NewMedia Express Pte Ltd</option>
                        <option value="nFrame">nFrame</option>
                        <option value="Nicalia Internet, S.L.U">Nicalia Internet, S.L.U</option>
                        <option value="NSS INT'L CO., LTD.">NSS INT'L CO., LTD.</option>
                        <option value="nSteve Designs">nSteve Designs</option>
                        <option value="O2SWITCH SARL">O2SWITCH SARL</option>
                        <option value="OC1-Mochahost, LLC">OC1-Mochahost, LLC</option>
                        <option value="ODS Joint Stock Company">ODS Joint Stock Company</option>
                        <option value="Oracle Corporation">Oracle Corporation</option>
                        <option value="Orange Business Services">Orange Business Services</option>
                        <option value="Oso Grande IP Services, LLC">Oso Grande IP Services, LLC</option>
                        <option value="OVH GmbH">OVH GmbH</option>
                        <option value="OVH Hosting, Inc.">OVH Hosting, Inc.</option>
                        <option value="OVH Ltd">OVH Ltd</option>
                        <option value="OVH SAS">OVH SAS</option>
                        <option value="OVH US LLC">OVH US LLC</option>
                        <option value="Parallel Web Cloud Services">Parallel Web Cloud Services</option>
                        <option value="Pars Parva System LTD">Pars Parva System LTD</option>
                        <option value="PDR">PDR</option>
                        <option value="PDR Ltd.">PDR Ltd.</option>
                        <option value="Pemerintah Kota Bandung">Pemerintah Kota Bandung</option>
                        <option value="Planet A, a.s.">Planet A, a.s.</option>
                        <option value="PrivateSystems Networks GA">PrivateSystems Networks GA</option>
                        <option value="Proservice LLC">Proservice LLC</option>
                        <option value="PT INDONESIA COMNETS PLUS">PT INDONESIA COMNETS PLUS</option>
                        <option value="PT Media Sarana Data">PT Media Sarana Data</option>
                        <option value="PT. Beon Intermedia">PT. Beon Intermedia</option>
                        <option value="PT. Cyberindo Mega Persada">PT. Cyberindo Mega Persada</option>
                        <option value="PT. Gaharu Sejahtera">PT. Gaharu Sejahtera</option>
                        <option value="PT. Jupiter Jala Arta">PT. Jupiter Jala Arta</option>
                        <option value="PT. RAMA WIMA NUSANTARA">PT. RAMA WIMA NUSANTARA</option>
                        <option value="RAMNODE">RAMNODE</option>
                        <option value="Reliable Software, Ltd.">Reliable Software, Ltd.</option>
                        <option value="ReliableSite.Net LLC">ReliableSite.Net LLC</option>
                        <option value="Renater">Renater</option>
                        <option value="RockingHoster Deutschland GmbH">RockingHoster Deutschland GmbH</option>
                        <option value="Rowaad company">Rowaad company</option>
                        <option value="roxbebek">roxbebek</option>
                        <option value="Rumahweb">Rumahweb</option>
                        <option value="SB Secure Data centers India Private Limited">SB Secure Data centers India Private Limited</option>
                        <option value="Scaleway">Scaleway</option>
                        <option value="SECURED SERVERS LLC">SECURED SERVERS LLC</option>
                        <option value="Server Central Network">Server Central Network</option>
                        <option value="Servicios OPERACIONES Gtd Internet">Servicios OPERACIONES Gtd Internet</option>
                        <option value="Sharif University Of Technology">Sharif University Of Technology</option>
                        <option value="Shinjiru Technology Sdn Bhd">Shinjiru Technology Sdn Bhd</option>
                        <option value="Shock Hosting LLC">Shock Hosting LLC</option>
                        <option value="Simply Transit Ltd">Simply Transit Ltd</option>
                        <option value="SingleHop LLC">SingleHop LLC</option>
                        <option value="SoftLayer Technologies Inc.">SoftLayer Technologies Inc.</option>
                        <option value="SoftLayer Technologies, Inc.">SoftLayer Technologies, Inc.</option>
                        <option value="Soluciones web on line s.l.">Soluciones web on line s.l.</option>
                        <option value="SourceDNS">SourceDNS</option>
                        <option value="Ssdsunucum int. ve bil. hiz.">Ssdsunucum int. ve bil. hiz.</option>
                        <option value="SUPERDATA-VN">SUPERDATA-VN</option>
                        <option value="Swisscom (Schweiz) AG">Swisscom (Schweiz) AG</option>
                        <option value="SWITCH">SWITCH</option>
                        <option value="Syrian Telecommunication Private Closed Joint Stock Company">Syrian Telecommunication Private Closed Joint Stock Company</option>
                        <option value="team.blue Denmark A/S">team.blue Denmark A/S</option>
                        <option value="Telefonica de Argentina">Telefonica de Argentina</option>
                        <option value="Telekomunikasi Indonesia (PT)">Telekomunikasi Indonesia (PT)</option>
                        <option value="The Constant Company, LLC">The Constant Company, LLC</option>
                        <option value="The Hosting Heroes Ltd">The Hosting Heroes Ltd</option>
                        <option value="Tier.Net Technologies LLC">Tier.Net Technologies LLC</option>
                        <option value="TierPoint, LLC">TierPoint, LLC</option>
                        <option value="Totaaldomein BV">Totaaldomein BV</option>
                        <option value="TotalChoice Hosting, LLC">TotalChoice Hosting, LLC</option>
                        <option value="trabia network">trabia network</option>
                        <option value="Trabia SRL">Trabia SRL</option>
                        <option value="TRANSMEDIA-ID">TRANSMEDIA-ID</option>
                        <option value="Triple T Broadband Public Company Limited">Triple T Broadband Public Company Limited</option>
                        <option value="Turnkey Internet Inc.">Turnkey Internet Inc.</option>
                        <option value="Uganda Christian University">Uganda Christian University</option>
                        <option value="UKDedicated LTD">UKDedicated LTD</option>
                        <option value="Unified Layer">Unified Layer</option>
                        <option value="Unigate Telecom Inc.">Unigate Telecom Inc.</option>
                        <option value="UNIVERSIDADE FEDERAL DO RIO DE JANEIRO">UNIVERSIDADE FEDERAL DO RIO DE JANEIRO</option>
                        <option value="Universo Online S.A.">Universo Online S.A.</option>
                        <option value="UptimeArchive, Inc.">UptimeArchive, Inc.</option>
                        <option value="Various Registries (Maintained by ARIN)">Various Registries (Maintained by ARIN)</option>
                        <option value="Varnion Technology Semesta, PT">Varnion Technology Semesta, PT</option>
                        <option value="VegasNAP, LLC">VegasNAP, LLC</option>
                        <option value="Vietel - CHT Compamy Ltd">Vietel - CHT Compamy Ltd</option>
                        <option value="Vietnam Posts and Telecommunications (VNPT)">Vietnam Posts and Telecommunications (VNPT)</option>
                        <option value="virtual solution srl">virtual solution srl</option>
                        <option value="VNPT Corp">VNPT Corp</option>
                        <option value="VTV-VN">VTV-VN</option>
                        <option value="Vultr Holdings, LLC">Vultr Holdings, LLC</option>
                        <option value="Web-hosting.com">Web-hosting.com</option>
                        <option value="Webhosting Bilisim Teknolojileri A.S">Webhosting Bilisim Teknolojileri A.S</option>
                        <option value="WEBSITEWELCOME.COM">WEBSITEWELCOME.COM</option>
                        <option value="WicitY srl">WicitY srl</option>
                        <option value="X10HOSTING, LLC">X10HOSTING, LLC</option>
                        <option value="Xneelo (Pty) Ltd">Xneelo (Pty) Ltd</option>
                        <option value="YANDEX LLC">YANDEX LLC</option>
                        <option value="Yelles AB">Yelles AB</option>
                        <option value="Yesilbir Bilisim Teknolojileri Bilgisayar Yayincilik Sanayi ve Ticaret Ltd. Sti.">Yesilbir Bilisim Teknolojileri Bilgisayar Yayincilik Sanayi ve Ticaret Ltd. Sti.</option>
                        <option value="zColo">zColo</option>
                        <option value="ZYE TELECOM PVT LTD">ZYE TELECOM PVT LTD</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
                    <label for="type" style="margin-bottom: 10px; margin-top: 5px">Source :</label>
                    <select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="cracked">cracked</option>
                        <option value="created">created</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
                    <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
                    <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="Seller419">Seller419</option>
                        <option value="Seller413">Seller413</option>
                        <option value="Seller463">Seller463</option>
                        <option value="Seller236">Seller236</option>
                        <option value="Seller382">Seller382</option>
                        <option value="Seller366">Seller366</option>
                        <option value="Seller435">Seller435</option>
                        <option value="Seller481">Seller481</option>
                        <option value="Seller415">Seller415</option>
                        <option value="Seller388">Seller388</option>
                        <option value="Seller397">Seller397</option>
                        <option value="Seller456">Seller456</option>
                        <option value="Seller478">Seller478</option>
                        <option value="Seller436">Seller436</option>
                        <option value="Seller458">Seller458</option>
                        <option value="Seller251">Seller251</option>
                        <option value="Seller311">Seller311</option>
                        <option value="Seller422">Seller422</option>
                        <option value="Seller480">Seller480</option>
                        <option value="Seller307">Seller307</option>
                        <option value="Seller471">Seller471</option>
                        <option value="Seller327">Seller327</option>
                        <option value="Seller300">Seller300</option>
                        <option value="Seller306">Seller306</option>
                        <option value="Seller246">Seller246</option>
                        <option value="Seller393">Seller393</option>
                        <option value="Seller423">Seller423</option>
                        <option value="Seller364">Seller364</option>
                        <option value="Seller420">Seller420</option>
                        <option value="Seller438">Seller438</option>
                        <option value="Seller465">Seller465</option>
                        <option value="Seller467">Seller467</option>
                        <option value="Seller342">Seller342</option>
                    </select>
                </div>
            </div>
            <div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
                <div class="col-sm-12 table-responsive">
                    <table id="smtp_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                        <thead>
                            <tr>
                                <th data-priority="1"></th>
                                <th class="all">ID</th>
                                <th data-priority="3">Country</th>
                                <th data-priority="6">Detect Hosting</th>
                                <th data-priority="4">Webmail</th>
                                <th data-priority="7">Source</th>
                                <th data-priority="8">Seller</th>
                                <th class="all">Send Test <span class="label label-default" id='checkertitle'>To <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630b1610170f0611100502170b061123040e020a0f4d000c0e">[email protected]</a></span></th>
                                <th data-priority="9">Price</th>
                                <th data-priority="10">Added on</th>
                                <th class="all">Buy</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="heading" id="myModalHeader"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>
                <div class="modal-body" id="modelbody">
                </div>
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
 
    <div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
            <div class="modal-content text-center">
 
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure?</p>
                </div>
 
                <div class="modal-body">
                    <i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
                </div>
 
                <div class="modal-footer flex-center">
                    <a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
                    <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div class="row d-flex justify-content-center align-items-center">
                        <img src="layout/images/balance.png">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
                        <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                            <i class="fas fa-book ml-1 white-text"></i>
                        </a>
                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        $(document).ready(function() {
            var webID;
            load_data();
 
            function load_data(myarray) {
                $('#smtp_data').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": true,
                    "order": [],
                    "columnDefs": [{
                        "targets": [0],
                        "visible": false
                    }],
 
                    "lengthMenu": [
                        [10, 25, 50, 100, 500, 10000],
                        [10, 25, 50, 100, 500, "All"]
                    ],
 
                    "ajax": {
                        url: "divPage5.html",
                        type: "POST",
                        data: {
                            data_filter: myarray,
                            draw: 'draw',
                            row: 'start',
                            rowperpage: 'length',
                            columnIndex: 'order',
                            columnName: 'columns',
                            columnSortOrder: 'order',
                            searchValue: 'search'
                        }
                    },
                    "columns": [{
                            "data": 0
                        },
                        {
                            "data": 1
                        },
                        {
                            "data": 2
                        },
                        {
                            "data": 3
                        },
                        {
                            "data": 4
                        },
                        {
                            "data": 5
                        },
                        {
                            "data": 6
                        },
                        {
                            "data": 7
                        },
                        {
                            "data": 8
                        },
                        {
                            "data": 9
                        },
                        {
                            "data": 10
                        }
                    ],
 
                    "pageLength": 500
                });
            }
 
            $(document).on('change', '.form-control', function() {
                $('#smtp_data').DataTable().destroy();
                var country = $('#country').val();
                var detectHosting = $('#detect_hosting').val();
                var source = $('#source').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                var seller = $idseller[1];
 
                var myarray = {};
                myarray[0] = country;
                myarray[1] = detectHosting;
                myarray[2] = source;
                myarray[3] = seller;
                console.log(myarray);
 
                if (country != '' || detectHosting != '' || source != '' || seller != '') {
 
                    load_data(myarray);
                } else {
                    load_data();
                }
            });
 
 
        });
 
        function buythistool(id) {
            $('#modalConfirmBuy').modal('show');
            webID = id;
        }
 
        function confirmbye(id) {
            id = webID;
            $.ajax({
                method: "GET",
                url: "buytool.php?id=" + id + "&t=smtps",
                dataType: "text",
                success: function(data) {
                    if (data.match("buy")) {
                        let lastid = data.split("buy,")[1];
                        $("#smtp" + id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order ${'#'+lastid}</button>`).show();
                    } else {
                        if (data.match("deleted")) {
 
                            $("#smtp" + id).html('Already sold / Deleted').show();
 
                        } else {
                            $('#modalCoupon').modal('show');
                        }
 
 
                    }
                },
            });
        }
 
        g: xcheck = 0;
 
        function check(id) {
            if (xcheck > 10) {
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shop" + id).attr('type')
                $("#shop" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
                $.ajax({
                    type: 'GET',
                    url: 'CheckSMTP' + id,
                    success: function(data) {
                        if (data.match("sent")) {
                            let testemail = data.split("sent,")[1];
                            $("#shop" + id).html(`<span class='btn btn-success btn-sm'>Sent to ${testemail+' '+'#'+id}</span>`).show();
 
                        } else {
                            if (data.match("incorrect")) {
                                var ide = 'bad-smtp' + id;
 
                                $("#shop" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
 
                                var tr = $("#shop" + id).parents('tr');
                                setTimeout(function() {
                                    $('#smtp_data').DataTable().row(tr).child.hide();
                                }, 2000);
                                $("#" + ide).parent().parent().parent().delay(3000).hide('slow');
 
 
 
                            } else {
                                if (data.match("bad")) {
                                    var ide = 'bad-smtp' + id;
                                    $("#shop" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();;
                                    var tr = $("#shop" + id).parents('tr');
                                    setTimeout(function() {
                                        $('#smtp_data').DataTable().row(tr).child.hide();
                                    }, 2000);
                                    $("#" + ide).parent().parent().parent().delay(3000).hide('slow');
 
 
                                }
 
 
                            }
                        }
                        xcheck--;
                    }
                });
            }
        }
 
        function openitem(order) {
 
 
            $.ajax({
                type: 'GET',
                url: 'showOrder' + order,
                success: function(data) {
                    $("#myModalHeader").text('Order #' + order);
                    $("#modelbody").append(data);
                    $('#myModal').modal();
 
                }
            });
 
        }
    </script>
</body>
 
</html>