
<?php 
require 'robot.php';
@import('cord_sql');

?>

  



<div class="container row">


<form action="sponsors_get.php" id="sponsorsform" method="post">
<input type="file" name="img" id="galo" style="width: 0; height: 0;display: none;" onchange='$trigger("galbtn")'>
    <input type="submit"  style="width: 0; height: 0;display: none;"  name="submit" id="galbtn">
</form>

    <div class="col-lg-3 m-2 col-5 rounded p-3 btn" onclick='$trigger("galo")' style="height: 50px; position: relative;background-position: center; background-image: url('/ADMIN_files/Shop-20_7450eb07-e395-4b17-8e47-cc27156cfd7f.webp');">
        <img src="image.svg" alt="add_file" style="width: 100%;border-radius: 50px;">
         
         </div>
         <?php

         $Sci_con=$conn->prepare("SELECT * FROM sponsors order by id ");
         $Sci_con->execute();
         foreach ($Sci_con as $Sci_col) {
         
         $Sci_id = $Sci_col['id'];
         $Sci_img = $Sci_col['gallery'];
         
         ?>  

    <div class="col-lg-3 m-2 col-5 rounded" style="height: 250px; position: relative;background-position: center; background-image: url('/ADMIN_files/Shop-20_7450eb07-e395-4b17-8e47-cc27156cfd7f.webp');" id="<?php echo $Sci_id; ?>">
        <img src="uploads/<?php echo $Sci_img; ?>" alt="" style="width: 100%; 100%">
         <div class="p-2 fw-bold btn btn-danger" style="position: absolute; top: -5px; right: -5px;" onclick="Sci.delete('<?php echo $Sci_id; ?>','deletesponsors.php')">Delete</div>
         
         </div>
               

         <?php
    }
?>


</div>





<script>


    $("#sponsorsform").on('submit',function(e){
    
    e.preventDefault();
    
    $(this).ajaxSubmit({
    
        success: function(data){
var d = data;
var e =  2;
if (d == e) {

    $space_nav_loader('sponsors.php','sign','s-btn10')
}
    } 
    
    });
    });
    
    
    </script>