<?php
require 'robot.php';
@import('form');
@import('cord_sql');

if (empty($_POST['font_size']) || empty($_POST['font_family']) || empty($_POST['theme_id'])) {
    html("Font size Or Form family Or Theme tye is empty");
} elseif (empty($_POST['font_family'])) {
    html("Font family is not filled");

} elseif (empty($_POST['font_size'])) {
    html("Font size is not filled");
} else if (empty($_POST['theme_id'])) {


    html("Theme type is not filled");
} else {

    $fs = $_POST['font_size'];
    $tid = $_POST['theme_id'];
    $ffm = $_POST['font_family'];



    $DB = new cord_sql;
    $DB->value = array("" . $fs . "", "" . $ffm . "", "" . $tid . "");
    $DB->runner = "UPDATE `theme` SET font_size=?, font_family=?, theme=?";
    if ($DB->update()) {
        echo 2;
    } else {
        $DB->update();
    }
}








?>