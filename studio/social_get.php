<?php
require 'robot.php';
@import('form');
@import('cord_sql');
$Phone =   $_POST['Phone'];
$wat =   $_POST['wat'];
$fb =   $_POST['fb'];
$inst = $_POST['inst'];
$tweeter = $_POST['Tweeter'];
$linkedin = $_POST['linkedin'];
$adress = $_POST['ADRESS'];
$email = $_POST['email'];
if (empty($wat) && empty($fb) && empty($inst)) {
html("<strong style='color:red;'> post filled is empty </strong>");
}
elseif (empty($wat)) {
html("<strong style='color:red;'> Wathsapp Box is empty </strong>");
}elseif (empty($fb)) {
html("<strong style='color:red;'> Facebook Box is empty </strong>");
}elseif (empty($inst)) {
    html("<strong style='color:red;'> instagram Box is empty </strong>");
    }elseif (empty($tweeter)) {
        html("<strong style='color:red;'> Tweeter Box is empty </strong>");
        }elseif (empty($linkedin)) {
            html("<strong style='color:red;'> Linkedin Box is empty </strong>");
            }elseif (empty($adress)) {
                html("<strong style='color:red;'> Address Box is empty </strong>");
                }
elseif (empty($email)) {
    html("<strong style='color:red;'> email Box is empty </strong>");
    }
else{
$DB = new cord_sql;
$DB->value =  array("". @form('wat','link')."", "".@form('fb','link')."","".@form('inst','link')."","".@form('Phone','text')."","".@form('Tweeter','link')."","".@form('linkedin','link')."","".@form('email','email')."","".@form('ADRESS','text')."");
$DB->runner = "UPDATE `soci`   SET wat=?, fb=?, inst=?, Phone=?, TWEETER=?, linke=?, email=?, adress=?";
if ($DB->update()) {
echo 2;
 } 
 else{
 $DB->update();	
 }

}






?>