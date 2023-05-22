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



 
