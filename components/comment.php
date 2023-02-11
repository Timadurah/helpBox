<?php
require '../conf/config.php';

$ip = $_SERVER['REMOTE_ADDR'];
$comment = strip_tags($_POST['cm']);
$url =strip_tags($_POST['ur']);
$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

if ($ip_info && $ip_info->geoplugin_countryName != null) {

    $sql = "INSERT INTO comment (topic_url,comment,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
VALUES ('" . $url . "','" . $comment . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
    $conn->exec($sql);

                       echo <<<EOT
                   <div class="card mb-4">
                 <div class="card-body">
                 <div class="d-flex justify-content-between">
                 <div class="d-flex flex-row align-items-center">
                 <img src="../images/ff.svg"
                 alt="avatar" width="25" height="25" />
                 <p>$comment</p>
                 <p class="small mb-0 ms-2">From $ip_info->geoplugin_countryName </p>
                 </div>
                 </div>
                 </div>
                 </div>
EOT;


}

?>