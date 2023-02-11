<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$img1 =  $_FILES['img1']['name'];
$img2 =  $_FILES['img2']['name'];
$textbox = $_POST['webname'];
if (empty($img1) || empty($img2) || empty($textbox)) {
html("post filled is empty");
}
elseif (empty($img1)) {
html("web banner image is empty");
}elseif (empty($img2)) {
html("web logo image is empty");
}elseif (empty($textbox)) {
html("Description Box is empty");
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."", "".@form('img2','img')."","".@form('webname','text')."");
$DB->runner = "UPDATE `webd`   SET img1=?, img2=?, webname=?";
if ($DB->update()) {
echo 2;
 } 
 else{
 $DB->update();	
 }

}









?>