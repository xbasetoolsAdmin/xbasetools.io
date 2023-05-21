<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<!DOCTYPE html>
<html lang="">
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Xbasetools</title>
		<!-- Bootstrap CSS -->
	
<link rel="stylesheet" href="layout/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="layout/js/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="layout/js/bootstrap.min.js"></script>
<script src="layout/js/bootbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />

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
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        </script>
<link rel="stylesheet" href="layout/css/all.min.css" />
<link rel="stylesheet" href="layout/css/main.css?v=12.9" />
<link rel="stylesheet" href="layout/css/util.css" />
<style>body{padding-top:80px}</style>
<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script src="layout/js/main.js"></script>
<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        </script>
<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        </style>
	<style>
 </head>
	
	<html>
	<head></head>
	<body>
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
			<div class="navbar-brand" href="main" style="color: var(--font-color);">
				<img width="40px" src="layout/images/logo.png">
				<a class="navbar-toggler-icon">
				</a>
				<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
					<a class="navbar-toggler-icon">
					</a>
					<ul class="navbar-nav mr-auto">
						<a class="navbar-toggler-icon">
						</a>
						<li class="nav-item dropdown mr-auto">
							<a class="navbar-toggler-icon">
							</a>
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-warehouse fa-sm orange-text"></i>
								Hosts
							</a>
							<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="rdp" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-desktop fa-fw"></i>
										RDPs
										<span class="badge badge-primary">42</span>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<ul>
					<div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
						<ul class="navbar-nav profile">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-bell text-danger"></i>
									<span class="badge badge-success">0</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
									<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="badge badge-danger">
										0
										<span class="px-2">
											<i class="fa fa-plus"></i>
										</span>
									</span>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Ticket
									<span class="badge badge-success">0</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
									<a class="dropdown-item" href="orders" style="color: var(--font-color);">
										<span class="px-2">Report Items</span>
									</a>
									<a class="dropdown-item" href="tickets" style="color: var(--font-color);">
										<span class="px-2">My Tickets
											<span class="badge badge-success">0</span>
										</span>
									</a>
									<a class="dropdown-item" href="reports" style="color: var(--font-color);">
										<span class="px-2">My Reports
											<span class="badge badge-success">0</span>
										</span>
									</a>
									<a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);">
										<span class="px-2">New Ticket</span>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									xbaseleets
									<i class="fa fa-user-secret" style="color: var(--font-color);"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
									<a class="dropdown-item" href="setting" style="color: var(--font-color);">
										<span class="px-2">Setting
											<i class="fa fa-cog"></i>
										</span>
									</a>
									<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);">
										<span class="px-2">Profile
											<i class="fa fa-user"></i>
										</span>
									</a>
									<a class="dropdown-item" href="orders" style="color: var(--font-color);">
										<span class="px-2">My Orders
											<i class="fa fa-shopping-cart"></i>
										</span>
									</a>
									<a class="dropdown-item" href="addBalance" style="color: var(--font-color);">
										<span class="px-2">Add Balance
											<i class="fa fa-money-bill-alt"></i>
										</span>
									</a>
									<a class="dropdown-item" href="logout" style="color: var(--font-color);">
										<span class="px-2">Logout
											<i class="fa fa-door-open"></i>
										</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</ul>
			</button>
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
		</div>
	
	

