<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$id = $_POST['id'];
if (empty($_POST['content']) || empty($_POST['catdata'])) {
html("One post filled is empty");
}elseif (empty($_POST['content'])) {
html("Description Box is empty");
}
else{

if (empty($_POST['banner'])) {


$img1 = 'logo.svg';
}
else{
    $img1 =  $_POST['banner'];
}

$cat =  $_POST['catdata'];
$textbox = $_POST['content'];
$DB = new cord_sql;
$DB->value =  array("".$textbox."","".$cat."","".$id."");
$DB->runner = "UPDATE `blog` SET textbox=?, category=? WHERE id=?";
if ($DB->update()) {
    echo 2;
     } 
     else{
     $DB->update();	
     }
}








?>