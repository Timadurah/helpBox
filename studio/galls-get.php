<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$gallery =  $_FILES['img']['name'];
if (empty($gallery)) {
html("one of the image is empty");
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img','img')."");
$DB->runner = "INSERT INTO `gallery`(`gallery`) VALUES (?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}









?>