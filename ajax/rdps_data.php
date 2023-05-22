


<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 


    <div class="row m-3 pt-1" style="color: var(--font-color);">
    

        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>

            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
            <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>


            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
            <select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>


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
                
            </select>
        </div>
    </div>
