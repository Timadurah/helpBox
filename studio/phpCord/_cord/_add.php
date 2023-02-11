<?php


 function add($f)
{
    if (file_exists($f)) {
        require $f;
    } 
    
   else{

    html("<p style='color:red; font-weight:bolder;'> Cord error : $f file not found .</p>");
   }
}


?>