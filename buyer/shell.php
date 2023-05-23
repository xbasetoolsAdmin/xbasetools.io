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
    <title>Shell</title>
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
    abbr {
        border-bottom: none !important;
        cursor: inherit !important;
        text-decoration: none !important;
    }
 
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_wrapper .dataTables_paginate .paginate_button {
 
        color: var(--font-color);
 
    }
 
    #shell_data_paginate .paginate_button {
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    #shell_data_filter {
        color: var(--font-color);
    }
 
    #shell_data_length {
        color: var(--font-color);
    }
 
    #shell_data_paginate {
        color: var(--font-color);
    }
 
    #shell_data_info {
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
                        <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">17144</span></span></a>
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
        <div class="p-2"><label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label></div>
    </div>
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            monthly pageviews, Alexa Ranks , unique visitors, site revenue (from advertising)<img style="width: 40px;" src="layout/images/new-icon.jpg"> </li>
            <li> Click on Plus <i class="fas fa-plus-circle"></i> button to list full information </b> such as domain name and technologies <i class="fab fa-wordpress fa-1x"></i> <i class="fas fa-blog"></i> <i class="fab fa-drupal"></i> <i class="fab fa-php"></i> <i class="fab fa-vuejs"></i> <i class="fab fa-python"></i> <i class="fab fa-laravel"></i> <i class="fab fa-js"></i> <i class="fab fa-joomla"></i> <i class="fab fa-java"></i> <i class="fab fa-node"></i> </li>
            <li> Click on check button <i class="fas fa-check-circle"></i> before buy any Shell to know if it's work or not.</li>
            <li> Click on Seo info <i class="fas fa-info"></i> button to check for available <b> SEO </b> info such as Moz - Alexa - SemRush - Facebook {Comments, Shares, Reactions} </li>
            <li> Click on CHECK BLACKLIST <i class="fas fa-check-circle"></i> before buy any <b> Shell </b> to check if the host reported as phishing or clean </li>
            <li> There is <b> 1939 </b> Shells Available.</li>
        </ul>
    </div>
    <ul class="nav nav-tabs m-2 container" style="color: var(--font-color);">
        <li class="active m-2"><a href="#mytickets" class="btn btn-primary btn-sm" data-toggle="tab" aria-expanded="true" style="font-size: 12px;">Shell Data</a></li>
    </ul>
    <div id="myTabContent" class="tab-content container-fluid pr-2">
        <div class="tab-pane fade in" id="open" style="color: var(--font-color);">
            <h3 class="text-center alert alert-info">Checker Email</h3>
            <div class="row">
                <div class="form-group col-md-5 " style="color: var(--font-color); background-color: var(--color-card);">
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
                    <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
                    <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="1 GRID (PTY) LTD">1 GRID (PTY) LTD</option>
                        <option value="90 Set Sail Limited">90 Set Sail Limited</option>
                        <option value="A2 Hosting, Inc.">A2 Hosting, Inc.</option>
                        <option value="abcle">abcle</option>
                        <option value="Afrihost (Pty) Ltd">Afrihost (Pty) Ltd</option>
                        <option value="Akamai Technologies, Inc.">Akamai Technologies, Inc.</option>
                        <option value="Alibaba Cloud">Alibaba Cloud</option>
                        <option value="Alibaba.com LLC">Alibaba.com LLC</option>
                        <option value="Alibaba.com Singapore E-Commerce Private Limited">Alibaba.com Singapore E-Commerce Private Limited</option>
                        <option value="ALICLOUD-HK">ALICLOUD-HK</option>
                        <option value="ALICLOUD-MYS">ALICLOUD-MYS</option>
                        <option value="ALMOUROLTEC SERVICOS DE INFORMATICA E INTERNET LDA">ALMOUROLTEC SERVICOS DE INFORMATICA E INTERNET LDA</option>
                        <option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option>
                        <option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option>
                        <option value="Amazon.com, Inc.">Amazon.com, Inc.</option>
                        <option value="ANS ACADEMY LIMITED">ANS ACADEMY LIMITED</option>
                        <option value="Aruba S.p.A.">Aruba S.p.A.</option>
                        <option value="Ausgamers Pty Ltd">Ausgamers Pty Ltd</option>
                        <option value="AZDIGI Corporation">AZDIGI Corporation</option>
                        <option value="Bach Kim Network solutions Join stock company">Bach Kim Network solutions Join stock company</option>
                        <option value="Baidu">Baidu</option>
                        <option value="Baidu/Telecom">Baidu/Telecom</option>
                        <option value="Bangmod Enterprise Co., Ltd.">Bangmod Enterprise Co., Ltd.</option>
                        <option value="BINARY LANE PTY LTD">BINARY LANE PTY LTD</option>
                        <option value="Callmyway NY s.a.">Callmyway NY s.a.</option>
                        <option value="Cambrium IT Services BV">Cambrium IT Services BV</option>
                        <option value="Cellcom Fixed Line Communication L.P">Cellcom Fixed Line Communication L.P</option>
                        <option value="CENTRALESUPELEC">CENTRALESUPELEC</option>
                        <option value="Charter Communications Inc">Charter Communications Inc</option>
                        <option value="China Telecom">China Telecom</option>
                        <option value="Chunghwa Telecom Co., Ltd.">Chunghwa Telecom Co., Ltd.</option>
                        <option value="CityLink Co., Ltd.">CityLink Co., Ltd.</option>
                        <option value="Citytelecom LLC">Citytelecom LLC</option>
                        <option value="CJSC Energomera">CJSC Energomera</option>
                        <option value="CLDIN B.V.">CLDIN B.V.</option>
                        <option value="CloudFlare">CloudFlare</option>
                        <option value="Cloudflare, Inc.">Cloudflare, Inc.</option>
                        <option value="ColoCrossing">ColoCrossing</option>
                        <option value="Comcast Cable Communications, LLC">Comcast Cable Communications, LLC</option>
                        <option value="Comvive Servidores S.L.">Comvive Servidores S.L.</option>
                        <option value="Contabo GmbH">Contabo GmbH</option>
                        <option value="Contabo Inc.">Contabo Inc.</option>
                        <option value="CS Loxinfo Public Company Limited">CS Loxinfo Public Company Limited</option>
                        <option value="CtrlS">CtrlS</option>
                        <option value="Cyberweb Networks Ltda">Cyberweb Networks Ltda</option>
                        <option value="Cyber_Folks S.A.">Cyber_Folks S.A.</option>
                        <option value="Data Space Sp. z o.o.">Data Space Sp. z o.o.</option>
                        <option value="Dataline Ltd">Dataline Ltd</option>
                        <option value="Dattatec.com">Dattatec.com</option>
                        <option value="Devoli LTD">Devoli LTD</option>
                        <option value="DigitalOcean, LLC">DigitalOcean, LLC</option>
                        <option value="DIMENOC SERVICOS DE INFORMATICA LTDA">DIMENOC SERVICOS DE INFORMATICA LTDA</option>
                        <option value="dogado GmbH">dogado GmbH</option>
                        <option value="Domain names registrar REG.RU, Ltd">Domain names registrar REG.RU, Ltd</option>
                        <option value="Doruk Iletisim ve Otomasyon Sanayi ve Ticaret A.S.">Doruk Iletisim ve Otomasyon Sanayi ve Ticaret A.S.</option>
                        <option value="Dreamscape Networks PTY LTD">Dreamscape Networks PTY LTD</option>
                        <option value="EDPNET NV">EDPNET NV</option>
                        <option value="EG VERI MERKEZI TEKNOLOJI LTD. STI.">EG VERI MERKEZI TEKNOLOJI LTD. STI.</option>
                        <option value="eUKhost LTD">eUKhost LTD</option>
                        <option value="Fasthosts Internet Limited">Fasthosts Internet Limited</option>
                        <option value="Fastly, Inc.">Fastly, Inc.</option>
                        <option value="FIRST SERVER LIMITED">FIRST SERVER LIMITED</option>
                        <option value="GANDI SAS">GANDI SAS</option>
                        <option value="GDY-US-EAST">GDY-US-EAST</option>
                        <option value="GITN Sdn. Bhd.">GITN Sdn. Bhd.</option>
                        <option value="GMO Internet,Inc">GMO Internet,Inc</option>
                        <option value="Go Daddy Netherlands B.V.">Go Daddy Netherlands B.V.</option>
                        <option value="GoDaddy.com, LLC">GoDaddy.com, LLC</option>
                        <option value="Google LLC">Google LLC</option>
                        <option value="Groupe LWS SARL">Groupe LWS SARL</option>
                        <option value="Hetzner Online GmbH">Hetzner Online GmbH</option>
                        <option value="Himalayan Online Services">Himalayan Online Services</option>
                        <option value="HIVELOCITY, Inc.">HIVELOCITY, Inc.</option>
                        <option value="Hong Kong Broadband Network Ltd">Hong Kong Broadband Network Ltd</option>
                        <option value="Host Europe GmbH">Host Europe GmbH</option>
                        <option value="HostDime.com, Inc.">HostDime.com, Inc.</option>
                        <option value="Hosting Ltd">Hosting Ltd</option>
                        <option value="Hostinger International Limited">Hostinger International Limited</option>
                        <option value="Hostopia Australia Web Pty Ltd">Hostopia Australia Web Pty Ltd</option>
                        <option value="HostPapa">HostPapa</option>
                        <option value="Hostwinds LLC.">Hostwinds LLC.</option>
                        <option value="Huawei Cloud Service data center">Huawei Cloud Service data center</option>
                        <option value="HUAWEI INTERNATIONAL PTE. LTD.">HUAWEI INTERNATIONAL PTE. LTD.</option>
                        <option value="Hurricane Electric LLC">Hurricane Electric LLC</option>
                        <option value="Infinitive Host">Infinitive Host</option>
                        <option value="Infomaniak Network SA">Infomaniak Network SA</option>
                        <option value="InMotion Hosting, Inc.">InMotion Hosting, Inc.</option>
                        <option value="Internet Thailand Company Ltd.">Internet Thailand Company Ltd.</option>
                        <option value="InternetNamesForBusiness.com">InternetNamesForBusiness.com</option>
                        <option value="Interserver, Inc">Interserver, Inc</option>
                        <option value="IONOS Inc.">IONOS Inc.</option>
                        <option value="IONOS SE">IONOS SE</option>
                        <option value="IP ServerOne Solutions Sdn Bhd">IP ServerOne Solutions Sdn Bhd</option>
                        <option value="IQ PL Sp. z o.o.">IQ PL Sp. z o.o.</option>
                        <option value="JSC IOT">JSC IOT</option>
                        <option value="JSC RU-CENTER">JSC RU-CENTER</option>
                        <option value="JSC Server">JSC Server</option>
                        <option value="Jumpline Inc">Jumpline Inc</option>
                        <option value="Kampung Communications, Inc.">Kampung Communications, Inc.</option>
                        <option value="Korea Telecom">Korea Telecom</option>
                        <option value="LeaseWeb Netherlands B.V.">LeaseWeb Netherlands B.V.</option>
                        <option value="LiquidNet US LLC">LiquidNet US LLC</option>
                        <option value="Locaweb Serviï¿½os de Internet S/A">Locaweb Serviï¿½os de Internet S/A</option>
                        <option value="Logosoft , information engineering and Internet providing">Logosoft , information engineering and Internet providing</option>
                        <option value="Long Van System Solution JSC">Long Van System Solution JSC</option>
                        <option value="Mahdiar Rafiee">Mahdiar Rafiee</option>
                        <option value="Markum Bilisim Teknolojileri Tic. A.S.">Markum Bilisim Teknolojileri Tic. A.S.</option>
                        <option value="Metrabyte Co.,Ltd">Metrabyte Co.,Ltd</option>
                        <option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option>
                        <option value="Mundo Startel SA">Mundo Startel SA</option>
                        <option value="MYNET S.R.L.">MYNET S.R.L.</option>
                        <option value="Namecheap, Inc.">Namecheap, Inc.</option>
                        <option value="National Information Technology Authority Uganda">National Information Technology Authority Uganda</option>
                        <option value="Nestify Internet, Inc.">Nestify Internet, Inc.</option>
                        <option value="NET-148-163-69-128-26">NET-148-163-69-128-26</option>
                        <option value="Netinternet Bilisim Teknolojileri AS">Netinternet Bilisim Teknolojileri AS</option>
                        <option value="NetMagic Solutions Pvt Ltd">NetMagic Solutions Pvt Ltd</option>
                        <option value="Netsec Limited">Netsec Limited</option>
                        <option value="Neubox">Neubox</option>
                        <option value="New Century InfoComm Tech Co., Ltd.">New Century InfoComm Tech Co., Ltd.</option>
                        <option value="New Dream Network, LLC">New Dream Network, LLC</option>
                        <option value="New Wave NetConnect, LLC">New Wave NetConnect, LLC</option>
                        <option value="Newfold Digital, Inc.">Newfold Digital, Inc.</option>
                        <option value="Office of Info.Tech. Admin. for Educational Development">Office of Info.Tech. Admin. for Educational Development</option>
                        <option value="ONEBIRD (M) SDN. BHD.">ONEBIRD (M) SDN. BHD.</option>
                        <option value="OOO Network of data-centers Selectel">OOO Network of data-centers Selectel</option>
                        <option value="OVH (NWK)">OVH (NWK)</option>
                        <option value="OVH GmbH">OVH GmbH</option>
                        <option value="OVH Hosting, Inc.">OVH Hosting, Inc.</option>
                        <option value="OVH SAS">OVH SAS</option>
                        <option value="OVH Singapore PTE. LTD">OVH Singapore PTE. LTD</option>
                        <option value="OVH Sp. z o. o.">OVH Sp. z o. o.</option>
                        <option value="Pars Databan Co">Pars Databan Co</option>
                        <option value="Pishgaman Toseeh Ertebatat Company (Private Joint Stock)">Pishgaman Toseeh Ertebatat Company (Private Joint Stock)</option>
                        <option value="PJSC Vimpelcom">PJSC Vimpelcom</option>
                        <option value="PT. Eka Mas Republik">PT. Eka Mas Republik</option>
                        <option value="Quang Trung Software City Development Company">Quang Trung Software City Development Company</option>
                        <option value="Rackh Lintas Asia, pt">Rackh Lintas Asia, pt</option>
                        <option value="reassign to CS Loxinfo Web Hosting">reassign to CS Loxinfo Web Hosting</option>
                        <option value="Reliable Software, Ltd.">Reliable Software, Ltd.</option>
                        <option value="RHINO CLOUD LTD">RHINO CLOUD LTD</option>
                        <option value="RIPE Network Coordination Centre">RIPE Network Coordination Centre</option>
                        <option value="ROTA LESTE INFORMï¿½TICA LTDA">ROTA LESTE INFORMï¿½TICA LTDA</option>
                        <option value="Rusonyx, Ltd.">Rusonyx, Ltd.</option>
                        <option value="SAKURA Internet Inc.">SAKURA Internet Inc.</option>
                        <option value="SECRELNET INFORMATICA LTDA">SECRELNET INFORMATICA LTDA</option>
                        <option value="SECURED SERVERS LLC">SECURED SERVERS LLC</option>
                        <option value="SEGURISERVER SAS">SEGURISERVER SAS</option>
                        <option value="Server Central Network">Server Central Network</option>
                        <option value="Shenzhen Tencent Computer Systems Company Limited">Shenzhen Tencent Computer Systems Company Limited</option>
                        <option value="Signet B.V.">Signet B.V.</option>
                        <option value="SKSA Technology Sdn Bhd">SKSA Technology Sdn Bhd</option>
                        <option value="SoftLayer Technologies Inc.">SoftLayer Technologies Inc.</option>
                        <option value="SoftLayer Technologies, Inc.">SoftLayer Technologies, Inc.</option>
                        <option value="SONATEL-AS Autonomous System">SONATEL-AS Autonomous System</option>
                        <option value="Soroush Rasanheh Company Ltd">Soroush Rasanheh Company Ltd</option>
                        <option value="SourceDNS">SourceDNS</option>
                        <option value="Sri Lanka Telecom Ltd">Sri Lanka Telecom Ltd</option>
                        <option value="Sternforth Ltd.">Sternforth Ltd.</option>
                        <option value="Stichting DIGI NL">Stichting DIGI NL</option>
                        <option value="Strasmore, Inc.">Strasmore, Inc.</option>
                        <option value="Sucuri">Sucuri</option>
                        <option value="SYNERGY WHOLESALE PTY LTD">SYNERGY WHOLESALE PTY LTD</option>
                        <option value="TE Data">TE Data</option>
                        <option value="Team Consulting d.o.o.">Team Consulting d.o.o.</option>
                        <option value="Telecom/Unicom">Telecom/Unicom</option>
                        <option value="Telmex Colombia S.A.">Telmex Colombia S.A.</option>
                        <option value="Telone PVT Ltd">Telone PVT Ltd</option>
                        <option value="Tencent Cloud">Tencent Cloud</option>
                        <option value="TerraNet sal">TerraNet sal</option>
                        <option value="The Constant Company, LLC">The Constant Company, LLC</option>
                        <option value="TierPoint, LLC">TierPoint, LLC</option>
                        <option value="TimeWeb Ltd.">TimeWeb Ltd.</option>
                        <option value="TRANSWORLD ASSOCIATES (PVT) LIMITED">TRANSWORLD ASSOCIATES (PVT) LIMITED</option>
                        <option value="UAB Interneto vizija">UAB Interneto vizija</option>
                        <option value="Unified Layer">Unified Layer</option>
                        <option value="Uninet S.A. de C.V.">Uninet S.A. de C.V.</option>
                        <option value="Universo Online S.A.">Universo Online S.A.</option>
                        <option value="Various Registries (Maintained by ARIN)">Various Registries (Maintained by ARIN)</option>
                        <option value="Veridyen Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi">Veridyen Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi</option>
                        <option value="Versio B.V.">Versio B.V.</option>
                        <option value="Vietnam Posts and Telecommunications (VNPT)">Vietnam Posts and Telecommunications (VNPT)</option>
                        <option value="VIETNAM POSTS AND TELECOMMUNICATIONS GROUP">VIETNAM POSTS AND TELECOMMUNICATIONS GROUP</option>
                        <option value="Viettel Group">Viettel Group</option>
                        <option value="VNPT Corp">VNPT Corp</option>
                        <option value="Web-hosting.com">Web-hosting.com</option>
                        <option value="Webglobe, s.r.o.">Webglobe, s.r.o.</option>
                        <option value="Webhosting.Net, Inc.">Webhosting.Net, Inc.</option>
                        <option value="Webico Company Limited">Webico Company Limited</option>
                        <option value="WebWeb.com">WebWeb.com</option>
                        <option value="WholeSale Internet, Inc.">WholeSale Internet, Inc.</option>
                        <option value="WPEngine, Inc.">WPEngine, Inc.</option>
                        <option value="Yesilbir Bilisim Teknolojileri Bilgisayar Yayincilik Sanayi ve Ticaret Ltd. Sti.">Yesilbir Bilisim Teknolojileri Bilgisayar Yayincilik Sanayi ve Ticaret Ltd. Sti.</option>
                        <option value="ZAM LTDA.">ZAM LTDA.</option>
                        <option value="ZETTA HOSTING SOLUTIONS LLC.">ZETTA HOSTING SOLUTIONS LLC.</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="host_info" style="margin-bottom: 10px; margin-top: 5px">OS :</label>
                    <input type="search" class="form-control" id="host_info" style="color: var(--font-color); background-color: var(--color-card);">
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
                    <label for="domaine" style="margin-bottom: 10px; margin-top: 5px; )">domaine TLD:</label>
                    <input type="search" class="form-control" id="domaine" style="color: var(--font-color); background-color: var(--color-card);">
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="hosting_type" style="margin-bottom: 10px ;">SSL :</label>
                    <select name="hosting_type" id="hosting_type" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="http">http</option>
                        <option value="https">https</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
                    <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All Countries</option>
                        <option value=""></option>
                        <option value="Angola">Angola</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Egypt">Egypt</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Hong Kong SAR China">Hong Kong SAR China</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Norway">Norway</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Russia">Russia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="cms" style="margin-bottom: 10px ; margin-top: 5px">CMS :</label>
                    <select name="cms" id="cms" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="0">0</option>
                        <option value="Bitrix">Bitrix</option>
                        <option value="CodeIgniter">CodeIgniter</option>
                        <option value="iWeb">iWeb</option>
                        <option value="Joomla">Joomla</option>
                        <option value="Laravel">Laravel</option>
                        <option value="N/A">N/A</option>
                        <option value="Squarespace">Squarespace</option>
                        <option value="WooCommerce">WooCommerce</option>
                        <option value="WordPress">WordPress</option>
                        <option value="Yola">Yola</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
                    <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="Seller369">Seller369</option>
                        <option value="Seller450">Seller450</option>
                        <option value="Seller382">Seller382</option>
                        <option value="Seller376">Seller376</option>
                        <option value="Seller389">Seller389</option>
                        <option value="Seller296">Seller296</option>
                        <option value="Seller388">Seller388</option>
                        <option value="Seller397">Seller397</option>
                        <option value="Seller461">Seller461</option>
                        <option value="Seller436">Seller436</option>
                        <option value="Seller458">Seller458</option>
                        <option value="Seller473">Seller473</option>
                        <option value="Seller460">Seller460</option>
                        <option value="Seller381">Seller381</option>
                        <option value="Seller316">Seller316</option>
                        <option value="Seller394">Seller394</option>
                        <option value="Seller470">Seller470</option>
                        <option value="Seller307">Seller307</option>
                        <option value="Seller373">Seller373</option>
                        <option value="Seller471">Seller471</option>
                        <option value="Seller309">Seller309</option>
                        <option value="Seller306">Seller306</option>
                        <option value="Seller254">Seller254</option>
                        <option value="Seller393">Seller393</option>
                        <option value="Seller440">Seller440</option>
                        <option value="Seller420">Seller420</option>
                        <option value="Seller465">Seller465</option>
                        <option value="Seller365">Seller365</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="type" style="margin-bottom: 10px; margin-top: 5px">Source :</label>
                    <select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value="cracked">cracked</option>
                        <option value="created">created</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="type" style="margin-bottom: 10px; margin-top: 5px"><abbr title="Domain Authority">DA :</abbr></label>
                    <select name="da" id="da" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value=""></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="2">2</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="3">3</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="38">38</option>
                        <option value="4">4</option>
                        <option value="42">42</option>
                        <option value="5">5</option>
                        <option value="59">59</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="90">90</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
                    <label for="type" style="margin-bottom: 10px; margin-top: 5px"><abbr title="Page Authority">PA :</abbr></label>
                    <select name="pa" id="pa" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                        <option value="">All</option>
                        <option value=""></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="3">3</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="4">4</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
            <div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
                <div class="col-sm-12 table-responsive">
                    <table id="shell_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                        <thead>
                            <tr>
                                <th data-priority="1"></th>
                                <th class="all">ID</th>
                                <th data-priority="3">Host Info</th>
                                <th data-priority="4">Country</th>
                                <th data-priority="9">Type</th>
                                <th data-priority="14">TLD</th>
                                <th data-priority="13">Domain</th>
                                <th data-priority="12">Hosting</th>
                                <th data-priority="15">CMS</th>
                                <th class="all">Check Blacklist</th>
                                <th class="all">Seo Info</th>
                                <th data-priority="10">Source</th>
                                <th class="all">Technologies</th>
                                <th data-priority="11">Seller</th>
                                <th class="all">Check</th>
                                <th class="all">Price</th>
                                <th data-priority="16">Added on </th>
                                <th class="all">Send Test</th>
                                <th data-priority="5">DA</th>
                                <th data-priority="6">PA</th>
                                <th class="all">Buy</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="TrafficInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
            <div class="modal-content">
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> Traffic INFO</h4>
                    <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" id="Trafficinfobody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="showmagseyesorno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
            <div class="modal-content text-center">
 
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">will be deducted 0.10$ from the balance of the service cost?</p>
                </div>
 
                <div class="modal-body">
                    <i class='fas fa-search fa-4x animated rotateIn'></i>
                </div>
 
                <div class="modal-footer flex-center">
                </div>
            </div>
 
        </div>
    </div>
    <div class="modal fade" id="techInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centere modal-notify  cascading-modal" role="document">
            <div class="modal-content">
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> TECH INFO</h4>
                    <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="techInfoBody"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="seoInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
            <div class="modal-content">
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> SEO INFO</h4>
                    <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" style="height: 650px; overflow: auto;">
                    <ul class="list-group" id="seoInfoBody"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
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
 
    <script>
        $(document).ready(function() {
            var webID;
 
            load_data();
 
            function load_data(myarray) {
                $('#shell_data').DataTable({
 
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "order": [],
                    "lengthMenu": [
                        [10, 25, 50, 100, 500, 1000000],
                        [10, 25, 50, 100, 500, "All"]
                    ],
                    "columnDefs": [{
                        "targets": [0],
                        "visible": false
                    }],
 
                    "ajax": {
                        url: "divPage3.html",
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
                        },
                        {
                            "data": 11
                        },
                        {
                            "data": 12
                        },
                        {
                            "data": 13
                        },
                        {
                            "data": 14
                        },
                        {
                            "data": 15
                        },
                        {
                            "data": 16
                        },
                        {
                            "data": 17
                        },
                        {
                            "data": 18
                        },
                        {
                            "data": 19
                        },
                        {
                            "data": 20
                        }
                    ],
 
                    "pageLength": 100
                });
            }
 
            $('[data-toggle="popover-hover"]').popover({
                container: 'body',
                html: true,
                trigger: 'hover',
                placement: 'top'
 
            });
 
 
            $(document).on('change', '.form-control', function() {
 
                $('#shell_data').DataTable().destroy();
                var country = $('#country').val();
                var detectHosting = $('#detect_hosting').val();
                var typehosting = $('#hosting_type').val();
                var source = $('#source').val();
                var domaine = $('#domaine').val();
                var hostinfo = $('#host_info').val();
                var cms = $('#cms').val();
                var da = $('#da').val();
                var pa = $('#pa').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                var seller = $idseller[1];
 
                var myarray = {};
 
                myarray[0] = country;
                myarray[1] = detectHosting;
                myarray[2] = typehosting;
                myarray[3] = source;
                myarray[4] = domaine;
                myarray[5] = seller;
                myarray[6] = da;
                myarray[7] = hostinfo;
                myarray[8] = pa;
                myarray[9] = cms;
 
 
 
                if (country != '' || detectHosting != '' || typehosting != '' || source != '' || domaine != '' || seller != '' || hostinfo != '' || da != '' || pa != '' || cms != '') {
 
                    load_data(myarray);
                } else {
                    load_data();
                }
            });
 
        });
 
 
        function Trafficinfo(typer, id) {
            $("#trafi" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
            $.ajax({
                type: 'GET',
                url: 'CheckShell' + id,
                success: function(data) {
                    if (data.match("Success")) {
                        $.ajax({
                            type: 'GET',
                            url: 'gettraffic?typer=' + typer + '&id=' + id,
                            success: function(data) {
                                if (data.match("showmessage")) {
                                    $("#showmagseyesorno .modal-footer.flex-center").html('<a onclick="javascript:Trafficinfoyes(\'' + typer + '\',' + id + ')"  class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a><a type="button" class="btn btn-info" data-dismiss="modal">No</a>');
                                    $("#trafi" + id).html('<a onclick="javascript:Trafficinfo(\'' + typer + '\',' + id + ')" class="btn btn-primary text-white btn-sm" style="font-size: 11px; cursor:pointer"><i class="fas fa-info mr-1"></i>Traffic</a>').show();
                                    $("#showmagseyesorno").modal();
                                } else {
                                    $("#Trafficinfobody").html(data);
                                    $("#trafi" + id).html('<a onclick="javascript:Trafficinfo(\'' + typer + '\',' + id + ')" class="btn btn-primary text-white btn-sm" style="font-size: 11px; cursor:pointer"><i class="fas fa-info mr-1"></i>Traffic</a>').show();
                                    $("#TrafficInfoModal").modal();
                                }
                            }
                        });
                    } else {
                        var ide = 'bad-shell' + id;
                        $("#trafi" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
                        var tr = $("#trafi" + id).parents('tr');
                        setTimeout(function() {
                            $('#shell_data').DataTable().row(tr).child.hide();
                        }, 2000);
                        $("#" + ide).parent().parent().parent().delay(3000).hide('slow');
                    }
                }
            });
        }
 
        function Trafficinfoyes(typer, id) {
            $.ajax({
                type: 'GET',
                url: 'gettraffic?typer=' + typer + '&yes&id=' + id,
                success: function(data) {
                    $("#Trafficinfobody").html(data);
                    $("#TrafficInfoModal").modal();
                }
            });
        }
 
        function buythistool(id) {
            $('#modalConfirmBuy').modal('show');
            webID = id;
        }
 
        function confirmbye(id) {
            id = webID;
 
            $.ajax({
                method: "GET",
                url: "buytool.php?id=" + id + "&t=stufs",
                dataType: "text",
                success: function(data) {
                    if (data.match("buy")) {
                        let lastid = data.split("buy,")[1];
                        ide = "shell" + id;
                        $("#shell" + id).html('<span id=' + ide + ' title="buy" type="shell"><a onclick=openitem(' + lastid + ') class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order #' + lastid + ' </a></span>').show();
                    } else {
                        if (data.match("deleted")) {
                            $("#shell" + id).html('Already sold / Deleted').show();
                        } else {
                            $('#modalCoupon').modal('show');
                        }
 
                    }
                },
            });
        }
 
        g: xcheck = 0;
 
        function check1(id) {
            if (xcheck > 9) {
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shops" + id).attr('type')
                $("#shops" + id).html('Sending...').show();
                $.ajax({
                    type: 'GET',
                    url: 'CheckShll' + id,
                    success: function(data) {
                        $("#shops" + id).html(data).show();
                        xcheck--;
                    }
                });
            }
        }
 
        g: xcheck = 0;
 
        function check(id) {
            if (xcheck > 9) {
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shop" + id).attr('type')
                $("#shop" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
                $.ajax({
                    type: 'GET',
                    url: 'CheckShell' + id,
                    success: function(data) {
                        if (data.match("Success")) {
                            $("#shop" + id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();
                        } else {
                            var ide = 'bad-shell' + id;
 
                            $("#shop" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
                            var tr = $("#shop" + id).parents('tr');
 
                            setTimeout(function() {
                                $('#shell_data').DataTable().row(tr).child.hide();
                            }, 2000);
                            $("#" + ide).parent().parent().parent().delay(3000).hide('slow');
 
 
                        }
                        xcheck--;
                    }
                });
            }
        }
 
        g: xcheck2 = 0;
 
        function check2(id) {
            if (xcheck2 > 9) {
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck2++;
                var type = $("#shop2" + id).attr('type')
                $("#shop2" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
                $.ajax({
                    type: 'GET',
                    url: 'CheckTest' + id,
                    success: function(data) {
                        if (data.match("Success")) {
                            $("#shop2" + id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();
                        } else {
                            var ide = 'bad-shell' + id;
 
                            $("#shop2" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Not Working!</span>').show();
 
 
                        }
                        xcheck2--;
                    }
                });
            }
        }
        g: xcheckbl = 0;
 
        function checkblacklist(id) {
            if (xcheckbl > 4) {
                bootbox.alert("<b><i class='fas fa-stroopwafel fa-spin'></i> Wait</b> - Other checking operation is executed!");
            } else {
                xcheckbl++;
                var type = $("#blacklistoutput" + id).attr('type')
                $("#blacklistoutput" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
                $.ajax({
                    type: 'GET',
                    url: 'checkshellblacklist.php?id=' + id,
                    success: function(data) {
                        if (data.match("working")) {
 
 
                            $("#blacklistoutput" + id).html(`<span class='btn btn-sm btn-success'>Clean</span>`).show();
 
                        } else {
                            var ide = 'bad-shell' + id;
                            $("#blacklistoutput" + id).html(`<span class='btn btn-sm btn-danger' id=' + ide  + '>Reported!</span>`).show();
                            var tr = $("#shop" + id).parents('tr');
 
                            setTimeout(function() {
                                $('#shell_data').DataTable().row(tr).child.hide();
                            }, 2000);
                            $("#" + ide).parent().parent().parent().delay(2000).hide('slow');
 
                        }
                        xcheckbl--;
                    }
                });
            }
        }
 
        function techInfo(id) {
            $.ajax({
                type: 'GET',
                url: 'ShellTechInfo' + id,
                success: function(data) {
                    $("#techInfoBody").html('');
                    $("#techInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: bold;">
                                   <span style="font-size: bold;"> categories </span> <span style="font-size: bold;"> name </span>
                                </li>
                        `);
 
                    let json = JSON.parse(data);
 
                    for (var i = 0; i < json.length; i++) {
                        var name = json[i].name;
                        var categories = json[i].categories;
                        $("#techInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ${categories} <span class="badge badge-pill badge-info"> ${name} </span>
                                </li>
                        `);
 
 
                    }
 
 
 
                    $("#techInfoModal").modal();
                }
            });
 
        }
 
        function seoInfo(id) {
            $.ajax({
                type: 'GET',
                url: 'ShellSeoInfo' + id,
                success: function(data) {
                    $("#seoInfoBody").html('');
 
                    let obj = JSON.parse(data);
 
                    Object.keys(obj).forEach(key => {
                        if (key != 'sr_domain') {
                            $("#seoInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ${key} <span class="badge badge-pill badge-info"> ${obj[key]} </span>
                                </li>
                            `);
                        }
                    });
 
                    $("#seoInfoModal").modal();
                }
            });
 
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