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
    <title>RDP</title>
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
                        <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">17145</span></span></a>
                        <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1939</span></span></a>
                        <a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">133</span></span></a>
                    </div>
                </li>
 
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="premium_shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">1074</span></span></a>
                        <a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">6048</span></span></a>
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
            <li> Click on check button before buy any RDP to know if it's work or not.</li>
            <li>There is <b> 44 </b> RDPs Available.</li>
        </ul>
    </div>
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>
                <option value="Brazil">Brazil</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="India">India</option>
                <option value="Ireland">Ireland</option>
                <option value="South Africa">South Africa</option>
                <option value="South Korea">South Korea</option>
                <option value="Sweden">Sweden</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
            <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option>
                <option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option>
                <option value="Microsoft">Microsoft</option>
                <option value="Microsoft do Brasil Imp. e Com. Software e Video G">Microsoft do Brasil Imp. e Com. Software e Video G</option>
                <option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
            <select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="10">10</option>
                <option value="2012">2012</option>
                <option value="2019">2019</option>
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
                <option value="cracked">cracked</option>
                <option value="created">created</option>
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
                <option value="Seller382">Seller382</option>
                <option value="Seller473">Seller473</option>
                <option value="Seller457">Seller457</option>
                <option value="Seller306">Seller306</option>
                <option value="Seller420">Seller420</option>
            </select>
        </div>
    </div>
    <div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="rdp_data" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="15">City</th>
                        <th data-priority="14">Windows</th>
                        <th data-priority="6">Ram</th>
                        <th data-priority="17">Access</th>
                        <th data-priority="8">Hosting</th>
                        <th data-priority="9">CPU</th>
                        <th data-priority="10">Warranty</th>
                        <th data-priority="11">Seller</th>
                        <th data-priority="12">Source</th>
                        <th data-priority="13">Price</th>
                        <th class="all" style="width:9% !important;">Ip BlackList</th>
                        <th class="all">Check</th>
                        <th data-priority="16">Added on</th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
            </table>
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
                $('#rdp_data').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "order": [],
                    "responsive": true,
                    "scrollX": true,
                    "columnDefs": [{
                            targets: [0],
                            visible: false
                        }
 
                    ],
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
                        }
 
                    ],
                    "createdRow": function(row, data, index) {
                        $(row).css("background-color", "var(--color-card)");
                        $(row).css("color", "var(--font-color)");
                    },
 
 
                    "lengthMenu": [
                        [10, 25, 50, 100, 500, 10000],
                        [10, 25, 50, 100, 500, "All"]
                    ],
 
                    "ajax": {
                        url: "divPage1.php",
                        type: "POST",
                        data: {
                            data_filters: myarray,
                            draw: 'draw',
                            row: 'start',
                            rowperpage: 'length',
                            columnIndex: 'order',
                            columnName: 'columns',
                            columnSortOrder: 'order',
                            searchValue: 'search'
                        }
                    },
 
                    "pageLength": 500
                });
            }
 
            $(document).on('change', '.form-control', function() {
                $('#rdp_data').DataTable().destroy();
                var country = $('#country').val();
                var detectHosting = $('#detect_hosting').val();
                var windows = $('#windows').val();
                var source = $('#source').val();
                var access = $('#access').val();
                var ram = $('#ram').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                var seller = $idseller[1];
                var myarray = {};
                myarray[0] = country;
                myarray[1] = detectHosting;
                myarray[2] = windows;
                myarray[3] = source;
                myarray[4] = access;
                myarray[5] = ram;
                myarray[6] = seller;
 
 
                if (country != '' || detectHosting != '' || windows != '' || source != '' || access != '' || ram != '' || seller != '') {
 
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
                url: "buytool.php?id=" + id + "&t=rdps",
                dataType: "text",
                success: function(data) {
                    if (data.match("buy")) {
                        let lastid = data.split("buy,")[1];
                        $("#rdp" + id).html(`<button onclick=openitem(${lastid}) class='btn btn-success btn-sm" style="font-size: 11px; cursor:pointer'>Order ${'#'+lastid}</button>`).show();
 
                    } else {
                        if (data.match("deleted")) {
 
                            $("#rdp" + id).html('Already sold / Deleted').show();
 
                        } else {
                            $('#modalCoupon').modal('show');
                        }
 
                    }
                },
            });
 
        }
 
        g: xcheck = 0;
 
        function check(id) {
 
            if (xcheck > 1) {
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shop" + id).attr('type')
                $("#shop" + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
                $.ajax({
                    type: 'GET',
                    url: 'CheckRdp' + id,
                    success: function(data) {
 
                        if (data.match("Success")) {
                            $("#shop" + id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();
 
                        } else {
                            var ide = "bad-rdp" + id;
                            $("#shop" + id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
 
                            var tr = $("#shop" + id).parents('tr');
 
                            setTimeout(function() {
                                $('#rdp_data').DataTable().row(tr).child.hide();
                            }, 2000);
                            $("#" + ide).parent().parent().parent().delay(3000).hide('slow');
                        }
                        xcheck--;
                    }
                });
 
            }
 
        }
 
 
        function blackList(ip, id) {
 
 
            $('#' + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
            $.ajax({
                type: 'GET',
                url: 'check_blacklist.php?check_ip=' + ip,
                success: function(data) {
                    let result = data.split(',')[0];
                    let total = data.split(',')[1];
                    if (result < 5) {
 
                        $('#' + id).html(`<span style='font-size: 0.7rem !important;' class='btn btn-sm btn-success'>POSSIBLY SAFE ${result + '/' + total} </span>`).show();
 
                    } else {
                        $('#' + id).html(`<span style='font-size: 0.7rem !important;' class='btn btn-sm btn-danger'>Un Safe ${result} / ${total}</span>`).show();
 
                    }
 
 
                }
            });
 
        }
 
        function openitem(order) {
            $("#myModalHeader").text('Order #' + order);
            $('#myModal').modal('show');
 
            $.ajax({
                type: 'GET',
                url: 'showOrder' + order,
                success: function(data) {
                    $("#modelbody").html(data).show();
                }
            });
 
        }
    </script>
</body>
 
</html>