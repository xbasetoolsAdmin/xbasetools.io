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


                      <?php
                        include('cr.php'); 

                        $query = "SELECT * FROM accounts";
                        $q = mysqli_query($db, $query);
                      ?>
                        <table class="table table-striped mt-4 ">
                            <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Card Number</th>
                                  <th>Last Name</th>
                                  <th>State</th>
                                  <th>ZIP</th>
                                  <th>SSN/DL</th>
                                  <th>DOB</th>
                                  <th>Price</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              if(mysqli_num_rows($q) > 0)
                              {
                                while($row = mysqli_fetch_assoc($q))
                                {
                                  ?>
                                  <tr>
                                
                           
                                    <td> 
                                      <?php echo $row['id']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['country']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['infos']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['sitename']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['resseller']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['date']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['date']; ?> 
                                    </td>
                                    <td>
                                        <form action="edit_post_two.php" method="post">
                                            <input type="hidden" name="edit_post_two_id" value="<?php echo $row['id']; ?>">
                                            
  <!-- your content here... -->


