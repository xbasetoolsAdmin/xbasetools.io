<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>

}
<style>
    .panel-default {
        border-color: #ecf0f1;
    }
 
    .panel {
        background-color: var(--color-card);
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }
 
    .card {
        background-color: var(--color-card);
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        border-color: var(--color-card);
    }
 
    .panel-body {
        padding: 15px;
    }
 
    .panel-footer {
        padding: 10px 15px;
        background-color: var(--color-secondary2);
        border-top: 1px solid var(--color-secondary2);
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
 
    }
 
    .panel-footer .label-info {
        background-color: #3498db;
    }
 
    .panel-footer .label-danger {
        background-color: #e74c3c;
    }
 
    .panel-footer .label-warning {
        background-color: #FFA726;
    }
 
 
    .panel-footer .label {
 
        display: inline;
        padding: .2em .6em .3em;
        	font-size: 100%;
        font-weight: bold;
        line-height: 1;
 
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
    }
 
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_wrapper .dataTables_paginate .paginate_button {
 
        color: var(--font-color);
 
    }
 
    #banks_item_paginate .paginate_button {
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    #banks_item_filter {
        color: var(--font-color);
    }
 
    #banks_item_length {
        color: var(--font-color);
    }
 
    #banks_item_paginate {
        color: var(--font-color);
    }
 
    #banks_item_info {
        color: var(--font-color);
    }
</style>
 
<body class="them">