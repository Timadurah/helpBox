

<?php

require "_con/config.ini";

function import($robot=''){
switch ($robot) {
   case 'time':
require '_time_ago/_.php';

    break;

        case 'form':
        
            require '_form/_form.php';
    
            break;

   case 'cuppon':

            require '_1/_1.php';
    
            break;
                    case 'user_info':
        
                require '_info/_info.php';
        
                break;
                case 'cord_sql':
        
                require '_db/_.php';
                break;
                
    default:
        # code...
        break;
}



}




?>