<?php
require 'robot.php';
@import('cord_sql');


if (empty($_POST['topic'])) {
    html("topic Box is empty");
}
elseif (empty($_POST['content'])) {
    html("Description Box is empty");
    }
    elseif (empty($_POST['catdata'])) {
        html("Categorize your content");
        }elseif (empty($_POST['desc'])) {
        html("Please input description text because it may affect your seo");
        }
else{

if (empty($_POST['banner'])) {


$img1 = 'logo.svg';
}
else{
	$img1 =  $_POST['banner'];
}

$cat =  $_POST['catdata'];
$topic = lcfirst($_POST['topic']);
$textbox = $_POST['content'];
$desc = $_POST['desc'];
$url = str_replace(' ', '-', $topic);
$DB = new cord_sql;
$DB->value =  array("".$img1."","".$topic."","".$desc."","".$textbox."","".$cat."","".$url."");
$DB->runner = "INSERT INTO `blog`(`img1`, `topic`, `desc`, `textbox`,`category`, `custom_url`) VALUES (?,?,?,?,?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}






?>