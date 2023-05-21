<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Editor - accounts</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/date-1.4.1/sl-1.6.2/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/date-1.4.1/sl-1.6.2/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.accounts.js"></script>
	</head>
	<body class="dataTables">
		<div class="container">

			<h1>
				DataTables Editor <span>accounts</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="accounts" width="100%">
				<thead>
					<tr>
						<th>acctype</th>
						<th>country</th>
						<th>infos</th>
						<th>price</th>
						<th>url</th>
						<th>sold</th>
						<th>sto</th>
						<th>dateofsold</th>
						<th>date</th>
						<th>resseller</th>
						<th>reported</th>
						<th>sitename</th>
						<th>login</th>
						<th>pass</th>
					</tr>
				</thead>
			</table>

		</div>
		<script>
			(function($){

$(document).ready(function() {
	var editor = new DataTable.Editor( {
		ajax: 'divPage6.php',
		table: '#accounts',
		fields: [
			{
				"label": "acctype:",
				"name": "acctype"
			},
			{
				"label": "country:",
				"name": "country"
			},
			{
				"label": "infos:",
				"name": "infos"
			},
			{
				"label": "price:",
				"name": "price"
			},
			{
				"label": "url:",
				"name": "url"
			},
			{
				"label": "sold:",
				"name": "sold"
			},
			{
				"label": "sto:",
				"name": "sto"
			},
			{
				"label": "dateofsold:",
				"name": "dateofsold"
			},
			{
				"label": "date:",
				"name": "date"
			},
			{
				"label": "resseller:",
				"name": "resseller"
			},
			{
				"label": "reported:",
				"name": "reported"
			},
			{
				"label": "sitename:",
				"name": "sitename"
			},
			{
				"label": "login:",
				"name": "login"
			},
			{
				"label": "pass:",
				"name": "pass"
			}
		]
	} );

	var table = new DataTable('#accounts', {
		dom: 'Bfrtip',
		ajax: 'php/table.accounts.php',
		columns: [
			{
				"data": "acctype"
			},
			{
				"data": "country"
			},
			{
				"data": "infos"
			},
			{
				"data": "price"
			},
			{
				"data": "url"
			},
			{
				"data": "sold"
			},
			{
				"data": "sto"
			},
			{
				"data": "dateofsold"
			},
			{
				"data": "date"
			},
			{
				"data": "resseller"
			},
			{
				"data": "reported"
			},
			{
				"data": "sitename"
			},
			{
				"data": "login"
			},
			{
				"data": "pass"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

		</script>
	</body>
</html>
