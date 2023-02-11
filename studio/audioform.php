<?php
require 'robot.php';
@import('form');
@import('cord_sql');


if (!empty($_FILES["ad"]["name"])) {
	# code...



$filename = $_FILES["ad"]["name"];

    # mg 
$post_kaboom = explode(".", $filename);
$post_fileExt = end($post_kaboom);
$ad =time().rand().".".$post_fileExt;
 

        # code...    
    move_uploaded_file($_FILES["ad"]["tmp_name"], "filemanager/" . $ad);


            $type= "ad";



$sqlll="INSERT INTO dural_filemanager(types,files) VALUE(?, ?)";
$rtrr=$conn->prepare($sqlll);
$rtrr->bindParam(1, $type);
$rtrr->bindParam(2, $ad);
$rtrr->execute();




echo ' <div class="d-flex p-1 w-100 btn" onclick=ad("Sci_editor","filemanager/'.$ad.'")>
<audio src="filemanager/'.$ad.'" alt="" class="mx-1" style="width: 100px;height: 60px;" controls></audio>
    </div>';


}













?>