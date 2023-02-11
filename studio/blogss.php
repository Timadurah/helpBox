

<?php 
require 'robot.php';
@import('cord_sql');

?>
  
   

<div class="row p-2 my-3 w-100" >
    <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none rounded bg-light" style="border-left: 5px solid gray;">
        <span class="fs-4 fw-bold text-dark" style="margin-left: 5px;"> Blogs </span>
</div>


    <?php

    $Sci_con=$conn->prepare("SELECT * FROM blog order by id DESC LIMIT 50");
    $Sci_con->execute();
      $cnt = $Sci_con->rowCount();
     if ($cnt < 1) {

echo '<center><h2 class="p-3 m-3 fw-bold text-danger"> 0 Blog Found </h2></center>';

    }
    foreach ($Sci_con as $Sci_col) {
    
    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = $Sci_col['topic'];
    $Sci_cont =substr($Sci_col['textbox'],0,235);
    
    ?>






  <div class="col-md-6 my-3" id="bb<?php echo $Sci_id; ?>" style="background: url(<?php echo $Sci_img1; ?>); background-repeat: no-repeat; background-position: center;">
        <div class="h-100 p-5 border rounded-3" style="background-color: rgba(0,0,0,0.1);">
          <p class="text-white fw-bold"><?php echo $Sci_topic; ?></p>
          <button class="btn btn-secondary fw-bold text-white" type="button"  onclick="$space_load('blog-edit.php?topic=<?php echo $Sci_id; ?>','sign')">Edit</button>
          <button class="btn btn-danger fw-bold text-white" type="button" onclick="Sci.deletehome('<?php echo $Sci_id; ?>','deleteblog.php','bb<?php echo $Sci_id; ?>')">Delete</button>
        </div>
      </div>




<?php
    }
?>


</div>