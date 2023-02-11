<?php
require '../conf/config.php';
require '../workers/task.php';


// cms scopping
if (!empty($_GET['topic'])) {
     $topic = htmlentities($_GET['topic']);
     $data = $conn->query("SELECT * FROM blog WHERE custom_url='" . $topic . "' order By id DESC LIMIT 1")->fetchAll();
     // and somewhere later:
     foreach ($data as $row) {
          $topic = $row['topic'];
          $description = $row['desc'];
          $img = '../filemanager/' . $row['img1'];
          $textbox = $row['textbox'];
          $category = $row['category'];
          $url = $row['custom_url'];



     }

     $ip = $_SERVER['REMOTE_ADDR'];
     $ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

     if ($ip_info && $ip_info->geoplugin_countryName != null) {

          $sql = "INSERT IGNORE INTO analys (topic,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
     VALUES ('" . $url . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
          $conn->exec($sql);

          // id	country	country_code	city	region	lat	long	continent_code	continent	timezone	currency	ip	date	
// Query results operations
//

     }


     ?>

     <!-- Html code goes here -->

     <!DOCTYPE html>
     <html lang="en">

     <head>
          <?php

          //   Import Seo Metal tags
          Seo($topic, $description, $img, 'Kilogrammy |'.$topic, 'https://kilogrammy.com/'.$url);
          ?>
          <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
          <link rel="stylesheet" href="../style/kilogrammy.css">
          <link rel="stylesheet" href="../style/style.css">
     </head>

     <body>

          <?php
          // Import navigation Cpnts
          Import('../components/nav.php');
          ?>

          <div class="container-fluid p-5">


               <!-- breadcrumb -->
               <div class="d-flex">
                    <p style="font-weight: 400;">Home > </p>
                    <p style="color: gray;" class="mx-2">
                         <?php echo $category; ?>
                    </p>
               </div>

               <br>

               <h1 class="fw-bold" style="font-size: 60px; font-family: algerian;">
                    <?php echo $category; ?>
               </h1>
               <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;line-height: 3; color:gray; ">
                    <?php echo $topic; ?>.
               </p>

               <div class="d-flex flex-wrap align-items-center p-rr" style="position: relative;">

                    <img src="<?php echo $img; ?>" alt="<?php echo $topic ?>" class="col-lg-9 shadow col-12"
                         style="border-radius:20px; max-height:70vh;">
                    <div class="p-5 bg-light col-lg-4 col-12 bg-white shadow flex-column justify-content-center b-img d">
                         <small>
                              <?php echo $category; ?>
                         </small>
                         <span style="font-size: 2.4rem; color: #0e1318;    font-weight: 300;
         line-height: 1.3; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><?php echo $topic; ?></span>
                    </div>

                    <div class="p-2 bg-light col-12 bg-white justify-content-center s" style="flex-direction:column;">
                         <br>
                         <span style="font-size: 2.4rem; color: #0e1318; font-weight: 300;
         line-height: 1.3; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><?php echo $topic; ?></span>
                    </div>

               </div>




               <style>
                    .newsletter-subscribe {
                         color: #313437;
                         background-color: #fff;
                         padding: 50px 0;
                    }

                    .newsletter-subscribe p {
                         color: #7d8285;
                         line-height: 1.5;
                    }

                    .newsletter-subscribe h2 {
                         font-size: 24px;
                         font-weight: bold;
                         margin-bottom: 25px;
                         line-height: 1.5;
                         padding-top: 0;
                         margin-top: 0;
                         color: inherit;
                    }

                    .newsletter-subscribe .intro {
                         font-size: 16px;
                         max-width: 500px;
                         margin: 0 auto 25px;
                    }

                    .newsletter-subscribe .intro p {
                         margin-bottom: 35px;
                    }

                    .newsletter-subscribe form {
                         justify-content: center;
                    }

                    .newsletter-subscribe form .form-control {
                         background: #eff1f4;
                         border: none;
                         border-radius: 3px;
                         box-shadow: none;
                         outline: none;
                         color: inherit;
                         text-indent: 9px;
                         height: 45px;
                         margin-right: 10px;
                         min-width: 250px;
                    }

                    .newsletter-subscribe form .btn {
                         padding: 16px 32px;
                         border: none;
                         background: none;
                         box-shadow: none;
                         text-shadow: none;
                         opacity: 0.9;
                         text-transform: uppercase;
                         font-weight: bold;
                         font-size: 13px;
                         letter-spacing: 0.4px;
                         line-height: 1;
                    }

                    .newsletter-subscribe form .btn:hover {
                         opacity: 1;
                    }

                    .newsletter-subscribe form .btn:active {
                         transform: translateY(1px);
                    }

                    .newsletter-subscribe form .btn-primary {
                         background-color: #055ada !important;
                         color: #fff;
                         outline: none !important;
                    }
               </style>



               <div class="row" style="margin-top: 70px;">

                    <div class="col-lg-8">






                         <div class="p-3">
                              <?php echo $textbox; ?>
                         </div>

                         <div class="p-2 my-4">
                              <div class="row d-flex justify-content-center">
                                   <div class="col-md-10 col-lg-8" >
                                        <div class="card shadow-0 border">
                                             <div class="card-body p-4">
                                                  <div class="form-outline mb-4">
                                                       <h4 class="my-2">Drop Comment</h4>

                                                       <input type="text" id="Addnote" class="form-control"
                                                            placeholder="Type comment..." name="comment"/>
                                                       <input type="text" id="ur" style="width:0; height:0px;border:transparent; x-overflow:hidden; outline:none;" value="<?php echo $url; ?>"  name="url"/>
                                                       <br>
                                                       <small style="color:gray;">Type your note, and hit enter to add
                                                            it</small>

                                                  </div>

<div  id="comment_append">
                                                  <?php

                                                  $stmt = $conn->prepare("SELECT * from comment where topic_url='".$url."' order by id DESC LIMIT 20");
                                                  $stmt->execute();
                                                  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                  if (!$result) {
                                                       echo '';
                                                  } else {
                                                       foreach ($result as $row) {
                                                            $comment =strip_tags($row['comment']);
                                                            $country =strip_tags($row['country']);
                                                                                echo <<<EOT
                                                                     <div class="card mb-4">
                                                                   <div class="card-body">
                                                                   <div class="d-flex justify-content-between">
                                                                   <div class="d-flex flex-row align-items-center">
                                                                   <img src="../images/ff.svg"
                                                                   alt="avatar" width="25" height="25" />
                                                                   <p>$comment</p>
                                                                   <p class="small mb-0 ms-2">From $country </p>
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                                   </div>
        EOT;


                                                       }

                                                  }
                                                  ?>


</div>


                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>


                    </div>


                    <div class="col-lg-4">
                         <div class="container bg-light p-5">
                              <div class="intro">
                                   <h2 class="text-center">Subscribe for our Newsletter</h2>
                                   <p class="text-center" id="datasubs">Subscribe to our channel to get latest update on any post we make. </p>
                              </div>
                              <div class="form-inline">
                                   <div class="form-group"><input class="form-control" id="subs" type="email" name="email"
                                             placeholder="Your Email"></div>
                                   <div class="form-group"><button class="btn btn-primary my-3" type="submit" onclick="subs()">Subscribe
                                        </button></div>
                                             </div>
                         </div>
                    </div>

               </div>

          </div>

          </div>

          <?php
          // Import footer Cpnts
          Import('../components/footer.php');
          ?>



          <script>
               // saaerch ajax 
               function Search(query) {
                    $.ajax({
                         url: "../components/search.php",
                         method: "POST",
                         data: { query: query },
                         success: function (data) {
                              $('#data').html(data);
                         }
                    });
               }
               // comment ajax 
               function Addnote(cm,ur) {
                    $.ajax({
                         url: "../components/comment.php",
                         method: "POST",
                         data: { cm: cm,ur: ur },
                         success: function (data) {
                              $('#comment_append').append(data);
                         }
                    });
               }

               // subscribe ajax 
               function subs(query) {
                    $.ajax({
                         url: "../components/subs.php",
                         method: "POST",
                         data: { query: query },
                         success: function (data) {
                              $('#datasubs').html(data);
                         }
                    });
               }


               const input = document.getElementById("search_Box");
               input.addEventListener("keyup", (event) => {
                    if (event.keyCode === 13) {
                         Search(input.value);
                    }
               });
               const subs = document.getElementById("subs");
               input.addEventListener("keyup", (event) => {
                    if (event.keyCode === 13) {
                         subs(subs.value);
                    }
               });



               const comment = document.getElementById("Addnote");
               const ur = document.getElementById("ur");
               comment.addEventListener("keyup", (event) => {
                    if (event.keyCode === 13) {
                         Addnote(comment.value, ur.value);
                    }
               });
               // live ajax func
               function load_data(query) {
                    $.ajax({
                         url: "../components/live.php",
                         method: "POST",
                         data: { query: query },
                         success: function (data) {
                              $('#live').html(data);
                         }
                    });
               }


               $("#search_Box").on("input", function () {
                    var search = $(this).val();
                    if (search != '') {
                         load_data(search);
                    }
                    else {
                         load_data();
                    }
               });



          </script>
     </body>

     </html>
     <?php
} else {

     header("Location: ../");


}

?>