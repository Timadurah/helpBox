<?php
require 'robot.php';
@import('form');
@import('cord_sql');


if (!empty($_FILES["vd"]["name"])) {
	# code...



$filename = $_FILES["vd"]["name"];

    # mg 
$post_kaboom = explode(".", $filename);
$post_fileExt = end($post_kaboom);
$vd =time().rand().".".$post_fileExt;
 

        # code...    
    move_uploaded_file($_FILES["vd"]["tmp_name"], "../filemanager/" . $vd);


            $type= "vd";



$sqlll="INSERT INTO dural_filemanager(types,files) VALUE(?, ?)";
$rtrr=$conn->prepare($sqlll);
$rtrr->bindParam(1, $type);
$rtrr->bindParam(2, $vd);
$rtrr->execute();




echo ' <div class="d-flex p-1 w-100 btn" onclick=vd("Sci_editor","../filemanager/'.$vd.'")>
<video src="../filemanager/'.$vd.'" alt="" class="mx-1" style="width: 100px;height: 60px;"></video>
    </div>';


}













?>