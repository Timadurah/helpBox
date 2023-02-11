<?php
require './conf/config.php';

$ip = $_SERVER['REMOTE_ADDR'];
$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

if ($ip_info && $ip_info->geoplugin_countryName != null) {

    $sql = "INSERT IGNORE INTO analys (topic,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
     VALUES ('" . $topic . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
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
    <title>kilogrammy home page</title>
    <meta name="title" content="kilogrammy home page">
    <meta name="description"
        content="kilogrammy is a blog that shares tips and tutorials on how to do things. Whether you are looking for a great recipe, craft project, or DIY project, we have got you covered.">
    <meta name="keywords"
        content="Content marketing,Search engine optimization (SEO),Blogging tips,Writing for the web,Social media marketing,Digital marketing,Influencer marketing,Online branding,Content creation,Content strategy,Lifestyle,Fashion,Beauty,Food,Travel,Personal Development,Technology,Health,Fitness,Entrepreneurship">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="5 days">
    <meta name="author" content="Ademola Aduragbemi">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="canonical" href="https://kilogrammy.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="kilogrammy home page">
    <meta property="og:description"
        content="kilogrammy is a blog that shares tips and tutorials on how to do things. Whether you are looking for a great recipe, craft project, or DIY project, we have got you covered.">
    <meta name="keywords"
        content="Content marketing,Search engine optimization (SEO),Blogging tips,Writing for the web,Social media marketing,Digital marketing,Influencer marketing,Online branding,Content creation,Content strategy,Lifestyle,Fashion,Beauty,Food,Travel,Personal Development,Technology,Health,Fitness,Entrepreneurship.">
    <meta property="og:url" content="https://kilogrammy.com">
    <meta property="og:site_name" content="Kilogrammy">
    <meta property="og:image" content="./images/logo.svg">
    <meta name="author" content="Kilogrammy Author">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://kilogrammy.com/">
    <meta property="twitter:title" content="kilogrammy home page">
    <meta property="twitter:description"
        content="kilogrammy is a blog that shares tips and tutorials on how to do things. Whether you are looking for a great recipe, craft project, or DIY project, we have got you covered.">
    <meta property="twitter:image" content="./images/logo.svg">
    <link rel="stylesheet" href="./style/kilogrammy.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
    <script defer src="./js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>

    <?php
    // Import navigation Cpnts
    Import('./components/nav.php');

    ?>








    <section class="content-section">
        <div class="d-flex flex-wrap container">


            <!-- +contents -->
            <?php



            $data = $conn->query("SELECT * FROM blog order By id DESC LIMIT 100")->fetchAll();
            // and somewhere later:
            foreach ($data as $row) {
                $topicc = $row['topic'];
                $url = $row['custom_url'];
                $img = $row['img1'];
                $textbox = substr($row['desc'], 0, 160);
                $category = ucwords($row['category']);
                echo <<<EOT

      <div class="p-2 col-lg-4 col-12 border-bottom">
      
<small class="my-1" style="font-size:10px;">      
 $category |<span style="color: gray;"> https://kilogrammy/kilogrammy/$url</span> 
    </small>
   <a href="./kilogrammy/$url" style="text-decoration: none;"> <h4 class="text-primary">$topicc</h4> 
    <img src="./filemanager/$img" alt="" class="col-lg-3 col-3 mx-1" style=" -webkit-shape-outside: polygon(0 0, 100% 100%, 0 100%);
shape-outside: polygon(0 0, 100% 100%, 0 100%);
float: left;
-webkit-clip-path: polygon(0 0, 100% 100%, 0 100%);
clip-path: polygon(0 0, 100% 100%, 0 100%);" alt="$topicc">
    <p class="p-2" style="font-size: smaller;">   
$textbox... </p></a>
</div>  
EOT;

            }










            ?>


        </div>
    </section>


    <?php

    // Import footer Cpnts
    Import('./components/footer.php');
    ?>


    <script>
        // saaerch ajax 
        function Search(query) {
            $.ajax({
                url: "./components/search.php",
                method: "POST",
                data: { query: query },
                success: function (data) {
                    $('#data').html(data);
                }
            });
        }


        const input = document.getElementById("search_Box");
        input.addEventListener("keyup", (event) => {
            if (event.keyCode === 13) {
                Search(input.value);
            }
        });

        // live ajax func
        function load_data(query) {
            $.ajax({
                url: "./components/live.php",
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