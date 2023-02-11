<?php





// detail


function user($type='')
{

switch ($type) {
    case 'ip':


        


        $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
         
        date_default_timezone_set($Cord_getter['timezone']);
        
        if($Cord_getter['status'] == 'success') {
        
        
            return  $Cord_getter['query'];
        echo '<br>';
        }
                else {
                    echo " Sorry unable to Get your IP Address !!!";
                    echo " Check your Network connection !!";
                    echo " If you are Online then check your IP Address !!\n";



                    html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                  }
                  
        
        
                break;

                case 'country_code':


        


                    $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                     
                    date_default_timezone_set($Cord_getter['timezone']);
                    
                    if($Cord_getter['status'] == 'success') {
                    
                    
                        return  $Cord_getter['countryCode'];
                    }
                            else {
                                echo " Sorry unable to Get your countryCode !!!";
                                echo " Check your Network connection !!";
                                echo " If you are Online then check your IP Address !!\n";



                                html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                              }
                              
                    
                    
                            break;
                            case 'country':


        


                                $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                 
                                date_default_timezone_set($Cord_getter['timezone']);
                                
                                if($Cord_getter['status'] == 'success') {
                                
                                
                                    return  $Cord_getter['country'];
                                }
                                        else {
                                            echo " Sorry unable to Get your Country !!!";
                                            echo " Check your Network connection !!";
                                            echo " If you are Online then check your IP Address !!\n";



                                            html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                          }
                                          
                                
                                
                                        break;

                                        case 'clock':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return  date("F j, Y, g:i a");
                                            }
                                                    else {
                                                        echo " Sorry unable to Get clock !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
            















                                                     case 'region':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['region'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your region !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'regionName':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['regionName'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your regionName !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'city':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['city'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your city !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be run Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'zip-code':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['zip'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your zip-code !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'timezone':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['timezone'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your timezone !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'isp':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['isp'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your isp !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'org':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['org'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your org name !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'asn':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['as'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your asn !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'lat':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['lat'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your latitude !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'lon':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['lon'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your longitude !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                    
                                                     case 'location':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       $Cord_getter['lat'].",".$Cord_getter['lon'];
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get your location !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;
                                                     case 'hostname':


        


                                            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
                                             
                                            date_default_timezone_set($Cord_getter['timezone']);
                                            
                                            if($Cord_getter['status'] == 'success') {
                                            
                                            
                                                return       gethostname();
                                                    




                                            }
                                                      else {
                                                        echo " Sorry unable to Get hostname !!!";
                                                        echo " Check your Network connection !!";
                                                        echo " If you are Online then check your IP Address !!\n";



                                                        html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
                                                      }
                                                      
                                            
                                            
                                                    break;








                                        case '':




            $Cord_getter = @unserialize(file_get_contents('http://ip-api.com/php/'));
 
            date_default_timezone_set($Cord_getter['timezone']);
            
            if($Cord_getter['status'] == 'success') {
                echo '<br> Get with  phpCord';

               echo "IP Address    ".$Cord_getter['query'];
            echo '<br>';
            
            echo "Country code  ".$Cord_getter['countryCode'];
            echo '<br>';
            
            echo "Country       ".$Cord_getter['country'];
            echo '<br>';
            
            echo "Date & Time   ".date("F j, Y, g:i a");
            echo '<br>';
            
            echo "Region code   ".$Cord_getter['region'];
            echo '<br>';
            
            echo "Region        ".$Cord_getter['regionName'];
            echo '<br>';
            
            echo "City          ".$Cord_getter['city'];
            echo '<br>';
            
            echo "Zip code      ".$Cord_getter['zip'];
            echo '<br>';
            
            echo "Time zone     ".$Cord_getter['timezone'];
            echo '<br>';
            
            echo "ISP           ".$Cord_getter['isp'];
            echo '<br>';
            
            echo "Organization  ".$Cord_getter['org'];
            echo '<br>';
            
            echo "ASN           ".$Cord_getter['as'];
            echo '<br>';
            
            echo "Latitude      ".$Cord_getter['lat'];
            echo '<br>';
            
            echo "Longtitude    ".$Cord_getter['lon'];
            echo '<br>';
            
            echo "Location      ".$Cord_getter['lat'].",".$Cord_getter['lon'];
            echo '<br>';
            echo "device owner   ".gethostname();
            echo '<br>';
            } else {
              echo " Sorry unable to Get your IP Address !!!";
              echo " Check your Network connection !!";
              echo " If you are Online then check your IP Address !!\n";



              html('<script>
 if(!navigator.onLine){
 alert("@user() cannot be use Offline");
} 
</script>');
            }
            
                        break;
    



















    default:
        # code...
        break;
}





    
}

















































?>