
                        

                        
<?php 
require 'robot.php';
@import('cord_sql');

?>



<?php

$Sci_con=$conn->prepare("SELECT * FROM user_dural_282200123 order by id DESC LIMIT 50");
$Sci_con->execute();
$count = $Sci_con->rowCount();

?>
                        <div class="d-dural-flex-child2 bg-light p-3" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">
                          <strong class="p-3" style="font-weight:800;">
                          Users Details <?php echo $count;  ?> Users </strong>
                          <br>
                            <ul class="list-group my-3">


                            
    <?php

if ($count < 1) {
    echo '
    <center>
    
        <strong style="font-weight:800;">No User Registered Yet</strong>
    </center>';
}
foreach ($Sci_con as $Sci_col) {

$Sci_idd = $Sci_col['id'];
$Sci_fname = $Sci_col['fname'];
$Sci_lname = $Sci_col['lname'];
$Sci_email = $Sci_col['email'];

?>
     
                              
                                <li class="list-group-item justify-content-between lh-sm" style="display:flex;" id="u<?php echo $Sci_idd; ?>">
                                    <div>
                                      <h6 class="my-0"><?php echo $Sci_email ?></h6>
                                      <small class="text-muted"><?php echo $Sci_fname ?> ^ <?php echo $Sci_lname ?></small>
                                    </div>
                                    <span class="btn btn-danger" onclick="Sci.deleteu('<?php echo $Sci_idd; ?>','deleteuser.php')"> Delete </span>
                                  </li>
                                  
                                
<?php
    }
?>

                               
                              </ul> <br>
                      <div class="btn-lg btn-success text-center bg-twist font-weight-bolder" style="font-weight:800;">Show More User</div>                
                                      
                                      
                                      
                                      
                                          
                        </div>

<div class="d-dural-flex-child1 p-3 ">


                            <h4 style="font-weight: bolder;">Alert</h4>
                        <p style="color: gray;">User detail shows here</p>
                        </div>
