<?php
// strict requirement
declare(strict_types=1); 

// form($input_name , type={[text],[a-z],[0.9],[email],[link],['img'],['audio'],['video'],['file'],['folder']}, $file_location);
// form() default is nomal text with novalidation
// form() file_amt is 1 per upload

function validator($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = $data;

    return $data;
  }



function form($name,$type='default',$file_location='uploads/')
{
    switch ($type) {
        // text get and validation
        case 'text':

$upload_cord_size = '1000000';



            
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST[$name])) {
                                html("<br> $name is required");

                    }
                    else {
                       return  validator($_POST[$name]);
                    }
                      
                    }
                    elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                        if (empty($_GET[$name])) {
        html("<br> $name is required");


                                                }
                                                else {
                                                  return  validator($_GET[$name]);
                                                }
                    }
                    
                    else {
                        error("$name : name is not found from http server post");
                    }   
                       
            







                        
                
                break;





// email      



case 'email':

$upload_cord_size = '1000000';



            
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST[$name])) {
        html("<br> $name is required");
    }
       else {
        $email = validator($_POST[$name]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            html("<br> Invalid email format");
        }    
         
        else{

            return $email;
        }
    
    
    }
         
       }
       elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
           if (empty($_GET[$name])) {
            html("<br> $name is required");
                                   }
                                   else {
                                    $email = validator($_GET[$name]);
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                      html("<br> Invalid email format");
                                    }  
                                     
        else{

            return $email;
        }
      
                                   }
       }
       
       else {
           error("$name : name is not found from http server post");
       }   
          








           
   
   break;






//    link    






case 'link':

$upload_cord_size = '1000000';



            
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST[$name])) {
                   html("<br> $name is required");

       }
       else {
        $linko = validator($_POST[$name]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linko)) {
          html("<br> Invalid URL");
        }
        else{

            return $linko;
        }
    
        }           
         

       }
       elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
           if (empty($_GET[$name])) {
        html("<br> $name is required");


                                   }
                                   else {
                                    $linko = validator($_GET[$name]);
                                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linko)) {
                                      html("<br> Invalid URL");
                                    }          
                                 
        else{

            return $linko;
        }
                                 }
       }
       
       else {
           error("$name : name is not found from http server post");
       }   
          








           
   
   break;






//    number




case '0-9':

$upload_cord_size = '1000000';



            
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST[$name])) {
                   html("<br> $name is required");

       }
       else {
        $number = validator($_POST[$name]);
        if (!is_numeric($number)) {
            html("<br> Invalid $name");
        }   
        else{

            return $number;
        }
    
    }
         
       }
       elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
           if (empty($_GET[$name])) {
        html("<br> $name is required");


                                   }
                                   else {
                                    $number = validator($_GET[$name]);
                                    if (!is_numeric($number)) {
                                        html("<br> Invalid $name");
                                    }   
                                    else{
                            
                                        return $number;
                                    }                                   }
       }
       
       else {
           error("$name : name is not found from http server post");
       }   
          






// 

           
   
   break;




   

//    ALPHA




case 'a-z':

$upload_cord_size = '1000000';



      
            
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST[$name])) {
                    html("<br> $name is required");
 
        }
        else {
         $alphabet = validator($_POST[$name]);
         if (!preg_match("/^[a-zA-Z ]*$/",$alphabet)) {
           html("<br> Only letters and white space allowed");
          }  
         else{
 
             return $alphabet;
         }
     
     }
          
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (empty($_GET[$name])) {
         html("<br> $name is required");
 
 
                                    }
                                    else {
                                     $alphabet = validator($_GET[$name]);
                                     if (!preg_match("/^[a-zA-Z ]*$/",$alphabet)) {
                                        html("<br> Only letters and white space allowed");
                                       }   
                                     else{
                             
                                         return $alphabet;
                                     }                                   }
        }
        
        else {
            error("$name : name is not found from http server post");
        }   
           
 
 
 
 
 
 
// 




   
   break;












//    image





                
case 'img':

$upload_cord_size = '1000000';


if ($file_location == 'uploads/') {


    if(!is_dir($file_location)) {
        mkdir("uploads");

    }

}
       if (empty($_FILES["".$name.""]["name"])) {
                   html("<br> $name is required");

       }
       else {

        $target_dir = $file_location;
        $target_file = $target_dir . basename($_FILES["".$name.""]["name"]);
        $uploadOk = 1;
        $imageFileType = $_FILES["".$name.""]["type"];
        // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["".$name.""]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        
      if ($_FILES["".$name.""]["size"] > $upload_cord_size) {
            echo " <br> Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
       



elseif (! $_FILES["".$name.""]["type"] == 'image/png') {

  echo '<strong style="color: red;"> format is not valid we only allow "png, jpg and jpeg ". </strong>';
  $uploadOk == 0;
}
elseif (! $_FILES["".$name.""]["type"] == 'image/jpeg' ) {

  echo '<strong style="color: red;"> format is not valid we only allow "png, jpg and jpeg ". </strong>';
  $uploadOk == 0;
}
elseif (! $_FILES["".$name.""]["type"] == 'image/jpg' ) {

  echo '<strong style="color: red;"> format is not valid we only allow "png, jpg and jpeg ". </strong>';
  $uploadOk == 0;
}
elseif (! $_FILES["".$name.""]["type"] == 'image/gif' ) {

  echo '<strong style="color: red;"> format is not valid we only allow "png, jpg and jpeg ". </strong>';
  $uploadOk == 0;
}

        // Check if $uploadOk is set to 0 by an error
        elseif ($uploadOk == 0) {
            echo "<br> Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          $post_kaboom2 = explode(".", $_FILES["".$name.""]["name"]);
$post_fileExt2 = end($post_kaboom2);
$_img  ="@Space-package".time().rand().".".$post_fileExt2;
 

            if (move_uploaded_file($_FILES["".$name.""]["tmp_name"],$file_location.$_img)) {
                return $_img;
            } else {
                echo "<br> Sorry, there was an error uploading your file.";
            }
        }

}
         
       
       break;














       

//    video





                
case 'video':

$upload_cord_size = '1000000';






    if ($file_location == 'uploads/') {


        if(!is_dir($file_location)) {
            mkdir("uploads");
    
        }
    
    }



    if ( empty($_FILES["".$name.""]["name"])) {
        html("<br> $name is required");

}
else {

$target_dir = $file_location;
$target_file = $target_dir . basename($_FILES["".$name.""]["name"]);
$uploadOk = 1;
$videoFileType = $_FILES["".$name.""]["type"];

if ($_FILES["".$name.""]["size"] > $upload_cord_size) {
 echo "<br> Sorry, your file is too large.";
 $uploadOk = 0;
}
// Allow certain file formats
elseif($videoFileType !== "video/mp4" && $videoFileType !== "video/mpeg" && $videoFileType !== "video/jp2"
&& $videoFileType !== "video/wmv" && $videoFileType !== "video/ogg" && $videoFileType !== "video/jp3") {
 echo "<br> Sorry, only MP4, MPEG, JP2 & WMV & OGG & JP3 files are allowed.";
 $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
elseif ($uploadOk == 0) {
 echo "<br> Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
 if (move_uploaded_file($_FILES["".$name.""]["tmp_name"], $target_file)) {
     echo "<br> The file ". basename( $_FILES["".$name.""]["name"]). " has been uploaded.";
 } else {
     echo "<br> Sorry, there was an error uploading your file.";
 }
}



}



       
    break;




//    audio





case 'audio':

$upload_cord_size = '1000000';



      
if ($file_location == 'uploads/') {


    if(!is_dir($file_location)) {
        mkdir("uploads");

    }

}
    



    

    if ( empty($_FILES["".$name.""]["name"])) {
        html("<br> $name is required");

}
else {

$target_dir = $file_location;
$target_file = $target_dir . basename($_FILES["".$name.""]["name"]);
$uploadOk = 1;
$audioFileType = $_FILES["".$name.""]["type"];


// Check file size
if ($_FILES["".$name.""]["size"] > $upload_cord_size) {
 echo "<br> Sorry, your file is too large.";
 $uploadOk = 0;
}
// Allow certain file formats
if($audioFileType !== "audio/mp3" && $audioFileType !== "audio/mpeg" && $audioFileType !== "audio/wav"
&& $audioFileType !== "audio/ogg") {
 echo "<br> Sorry, only MP3, WAF, MPEG & OGG files are allowed.";
 $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<br> Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
 if (move_uploaded_file($_FILES["".$name.""]["tmp_name"], $target_file)) {
     echo "<br> The file ". basename( $_FILES["".$name.""]["name"]). " has been uploaded.";
 } else {
     echo "<br> Sorry, there was an error uploading your file.";
 }
}





}


    break;




//    files





                
case 'files':

$upload_cord_size = '1000000';





      
if ($file_location == 'uploads/') {


    if(!is_dir($file_location)) {
        mkdir("uploads");

    }

} 



    

    if ( empty($_FILES["".$name.""]["name"])) {
        html("<br> $name is required");

}
else {

$target_dir = $file_location;
$target_file = $target_dir . basename($_FILES["".$name.""]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
 echo "<br> Sorry, file already exists.";
 $uploadOk = 0;
}
// Check file size
if ($_FILES["".$name.""]["size"] > $upload_cord_size) {
 echo "<br> Sorry, your file is too large.";
 $uploadOk = 0;
}
else {
 if (move_uploaded_file($_FILES["".$name.""]["tmp_name"], $target_file)) {
     echo "<br> The file ". basename( $_FILES["".$name.""]["name"]). " has been uploaded.";
 } else {
     echo "<br> Sorry, there was an error uploading your file.";
 }
}


}

    break;




//    folder





                
case 'folder':

$upload_cord_size = '1000000';





    
    




    break;









                
            case 'default':

$upload_cord_size = '1000000';



                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST[$name])) {
                                html("<br> $name is required");

                    }
                    else {
                        return $_POST[$name];
                    }
                      
                    }
                    elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                        if (empty($_GET[$name])) {
        html("<br> $name is required");


                                                }
                                                else {
                                                    return $_GET[$name];
                                                }
                    }
                    
                    else {
                        error("$name : name is not found from http server post");
                    }   
                    
                    break;
        
        default:   
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            return $_POST[$name];
              
            }
            elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                return $_GET[$name];
            }
            else {
                error("$name : name is not found from http server post");
            }   
            
            
break;


    }
 

}



?>