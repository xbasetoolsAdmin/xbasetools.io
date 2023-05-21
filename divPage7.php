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
 include("cr.php");

?>



</div>
<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="account_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="4">Country</th>
<th data-priority="3">Website Name</th>
<th data-priority="7">Details</th>
<th data-priority="8">Price</th>
<th data-priority="9">Seller</th>
<th data-priority="10">Source</th>
<th class="all">Proof</th>
<th data-priority="11">Date Created</th>
<th class="all">Buy</th>
</tr>
</thead>
<tbody>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="4">Country</th>
<th data-priority="3">Website Name</th>
<th data-priority="7">Details</th>
<th data-priority="8">Price</th>
<th data-priority="9">Seller</th>
<th data-priority="10">Source</th>
<th class="all">Proof</th>
<th data-priority="11">Date Created</th>
<th class="all">Buy</th>
</tr>
</tbody>
<tfoot>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="4">Country</th>
<th data-priority="3">Website Name</th>
<th data-priority="7">Details</th>
<th data-priority="8">Price</th>
<th data-priority="9">Seller</th>
<th data-priority="10">Source</th>
<th class="all">Proof</th>
<th data-priority="11">Date Created</th>
<th class="all">Buy</th>
</tr>
</tfoot>
</table>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<p class="heading" id="myModalHeader"></p>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="white-text">&times;</span>
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

            $(document).ready(function(){
                 var webID;

                load_data();

                function load_data(myarray) {
                    $('#account_data').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "responsive": true,
                        "scrollX": true,
                        "order": [],
                        "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],
                        "columnDefs": [
                            {
                                "targets": [ 0 ],
                                "visible": false
                            }
                        ],

                        "ajax":{
                            url:"divPage31.html",
                            type:"POST",
                            data:{
                             data_filter:myarray,
                             cat:document.getElementById('cat').value,
                             draw : 'draw',
                             row : 'start',
                             rowperpage : 'length',
                             columnIndex : 'order',
                             columnName : 'columns',
                             columnSortOrder : 'order',
                             searchValue : 'search'
                             }
                        },
                          "columns": [
                                { "data": 0 },
                                { "data": 1 },
                                { "data": 2 },
                                { "data": 3 },
                                { "data": 4 },
                                { "data": 5 },
                                { "data": 6 },
                                { "data": 7 },
                                { "data": 8 },
                                { "data": 9 },
                                { "data": 10}
                                ],

                        "pageLength": 500
                    });
                }

               $(document).on('change', '.form-control', function(){

                    $('#account_data').DataTable().destroy();
                var country = $('#country').val();
                var details = $('#infos').val();
                var seller1 = $('#seller').val();
                var website = $('#sitename').val();
                $idseller = seller1.split("Seller");
                var seller= $idseller[1];
                 var myarray = {};
                 myarray[0] = country;
                 myarray[1] = details;
                 myarray[2] = seller;
                 myarray[3] = website;


              if(country != '' || details != '' || seller != '' || website != '')
                {

                   load_data(myarray);
                }
                else
                {
                    load_data();
                }

                });


            });

            function buythistool(id){
         $('#modalConfirmBuy').modal('show');
         webID= id;
                        }

        function confirmbye(id){
              id= webID;
                $.ajax({
                            method:"GET",
                            url:"buytool.php?id="+id+"&t=accounts",
                            dataType:"text",
                            success:function(data){
                                    if(data.match("buy")){
                                let lastid = data.split("buy,")[1];
                                $("#premium"+id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order ${'#'+lastid}</button>`).show();

                            }
                            else{
                                if(data.match("deleted")){

                                $("#premium"+id).html('Already sold / Deleted').show();


                                  }else{
                                  $('#modalCoupon').modal('show');
                                }


                            }
                            },
                        });
            }
    function openitem(order){

        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
        $("#myModalHeader").text('Order #'+order);
        $("#modelbody").append(data);
        $('#myModal').modal();


        }});

        }

        </script>

<script type="text/javascript">
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=accounts",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#account"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
