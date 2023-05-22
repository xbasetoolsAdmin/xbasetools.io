<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<style>
.navbar-nav .dropdown-menu{margin:0!important}.theme-light{--color-primary:#0060df;--color-secondary:#fff;--color-secondary2:#ecf0f1;--color-accent:#fd6f53;--font-color:#000;--color-nav:#fff;--color-dropdown:#fff;--color-card:#fff;--color-card2:#d1ecf1;--color-info:#0c5460;--color-backinfo:#d1ecf1;--color-borderinfo:#bee5eb}.theme-dark{--color-primary:#17ed90;--color-secondary:#353b50;--color-secondary2:#353b50;--color-accent:#12cdea;--font-color:#fff;--color-nav:#363947;--color-dropdown:rgba(171,205,239,.3);--color-card:#262a37;--color-card2:#262a37;--color-info:#4dd0e1;--color-backinfo:#262a37;--color-borderinfo:#262a37}.them{background:var(--color-secondary);flex-direction:column;justify-content:center;align-items:center}.them h1{color:var(--font-color);font-family:sans-serif}.card-body{color:var(--font-color)}.them button{color:var(--font-color);background-color:#fff;padding:10px 20px;border:0;border-radius:5px}.navbar.navbar-light .navbar-toggler{color:var(--font-color)}.switch{position:relative;display:inline-block;width:60px;height:34px}.switch input{opacity:0;width:0;height:0}.slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s}.slider:before{position:absolute;content:"";height:40px;width:40px;left:0;bottom:4px;top:0;bottom:0;margin:auto 0;-webkit-transition:.4s;transition:.4s;box-shadow:0 0 15px #2020203d;background:#fff url('https://i.ibb.co/FxzBYR9/night.png');background-repeat:no-repeat;background-position:center}input:checked+.slider{background-color:#2196f3}input:focus+.slider{box-shadow:0 0 1px #2196f3}input:checked+.slider:before{-webkit-transform:translateX(24px);-ms-transform:translateX(24px);transform:translateX(24px);background:#fff url('https://i.ibb.co/7JfqXxB/sunny.png');background-repeat:no-repeat;background-position:center}.slider.round{border-radius:34px}.slider.round:before{border-radius:50%}
</style>
<script>
function e(e){localStorage.setItem("theme",e),document.documentElement.className=e}"theme-dark"===localStorage.getItem("theme")?(e("theme-dark"),document.getElementById("slider").checked=!1):(e("theme-light"),document.getElementById("slider").checked=!0);
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
                        <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">17135</span></span></a>
                        <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1848</span></span></a>
                        <a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">133</span></span></a>
                    </div>
                </li>
 
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="premium_shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">1066</span></span></a>
                        <a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">5986</span></span></a>
                        <a class="dropdown-item" href="premium_downloads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Downloads <span class="badge badge-primary">8</span></span></a>
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
                        <a class="dropdown-item" href="leads-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
                        <a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">163</span></span></a>
                        <a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">23</span></span></a>
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
                        <a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 86</span></span></a>
                    </div>
                </li>
 
                <li class="nav-item dropdown">
                    <a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
                </li>
            </ul>
 
