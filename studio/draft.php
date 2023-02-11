<?php
require 'robot.php';
@import('form');
@import('cord_sql');

try {
	
if (empty($_POST['topic']) || empty($_POST['content']) || empty($_POST['catdata'])) {
html("One post filled is empty");
}elseif (empty($_POST['topic'])) {
html("topic Box is empty");

}elseif (empty($_POST['content'])) {
html("Description Box is empty");
}
else{


if (empty($_POST['banner'])) {


$img1 = 'filemanager/blogMore.jpg';
}
else{
	$img1 =  $_POST['banner'];
}


$cat =  $_POST['catdata'];
$topic = $_POST['topic'];
$textbox = $_POST['content'];
$DB = new cord_sql;
$DB->value =  array("".$img1."","".$topic."","".$textbox."","".$cat."");
$DB->runner = "INSERT INTO `draft`(`img1`, `topic`, `textbox`,`category`) VALUES (?,?,?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}






} catch (Exception $e) {
	echo '<strong style="color:red;"> Phpcord error :'.$e.'</strong>';
}





?>