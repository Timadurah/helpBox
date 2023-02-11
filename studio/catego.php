<?php
require 'robot.php';
@import('form');
@import('cord_sql');


if (!empty($_POST['Categories'])) {
	# code...

            $cate= $_POST['Categories'];



$sqlll="INSERT INTO category(category_name) VALUE(?)";
$rtrr=$conn->prepare($sqlll);
$rtrr->bindParam(1, $cate);
$rtrr->execute();




echo '
<div class="p-2 border mx-1 fw-bold rounded" style="cursor: pointer;">

    <input type="radio" name="cat" value="'.$cate.'" class="mx-2" style="cursor: pointer;"  onclick="catput("'.$cate.'")">
    '.$cate.'

</div>';


}













?>