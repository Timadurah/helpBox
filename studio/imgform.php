<?php
require 'robot.php';
@import('form');
@import('cord_sql');


if (!empty($_FILES["img"]["name"])) {
	# code...



$filename = $_FILES["img"]["name"];

    # mg 
$post_kaboom = explode(".", $filename);
$post_fileExt = end($post_kaboom);
$img =time().rand().".".$post_fileExt;
 

        # code...    
    move_uploaded_file($_FILES["img"]["tmp_name"], "../filemanager/" . $img);


            $type= "img";



$sqlll="INSERT INTO dural_filemanager(types,file) VALUE(?,?)";
$rtrr=$conn->prepare($sqlll);
$rtrr->bindParam(1, $type);
$rtrr->bindParam(2, $img);
$rtrr->execute();



echo '<div class="p-2 bg-white shadow d-flex justify-content-center mx-2 fw-bold text_style rounded" onclick=img("Sci_editor","filemanager/'.$img.'")>
<img src="../filemanager/'.$img.'" alt="" class="mx-1" width="30" height="30">
    </div>';


}













?>