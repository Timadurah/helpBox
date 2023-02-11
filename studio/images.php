
<?php 
require 'robot.php';
@import('cord_sql');

?>

  



<div class="container row">
         <?php

         $Sci_con=$conn->prepare("SELECT * FROM dural_filemanager WHERE types='img' order by id ");
         $Sci_con->execute();
         foreach ($Sci_con as $Sci_col) {
         
         $Sci_id = $Sci_col['id'];
         $Sci_img = $Sci_col['file'];
         
         ?>  

    <div class="col-lg-3 m-2 col-5 rounded shadow" style="height: 250px; position: relative; border: 5px solid gray;" id="<?php echo $Sci_id; ?>">
        <img src="../filemanager/<?php echo $Sci_img; ?>" alt="" style="width: 100%;height:100%">
         <div class="p-2 fw-bold btn btn-danger" style="position: absolute; top: -5px; right: -5px;"  onclick="Sci.delete('<?php echo $Sci_id; ?>','deleteimages.php')">Delete</div>
         
         </div>
               

         <?php
    }
?>


</div>



