<?php

require 'robot.php';
@import('cord_sql');

$posts_id = filter_var(htmlspecialchars($_POST['id']),FILTER_SANITIZE_NUMBER_INT);
$delete_post_sql = "DELETE FROM gallery WHERE id=?";
$delete_post = $conn->prepare($delete_post_sql);
$delete_post->bindParam(1, $posts_id);
if ($delete_post->execute()) {
    echo 2;
     } 
     else{
     $delete_post->execute();	
     }
    

?>