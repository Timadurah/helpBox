<?php
require '../conf/config.php';

$ip = $_SERVER['REMOTE_ADDR'];
$comment = strip_tags($_POST['cm']);
$url =strip_tags($_POST['ur']);
$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

if ($ip_info && $ip_info->geoplugin_countryName != null) {

    $sql = "INSERT INTO subscription (topic_url,comment,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
VALUES ('" . $url . "','" . $mail . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
    $conn->exec($sql);

                       echo <<<EOT
                 <p class="small mb-0 ms-2 text-success">Thanks for subscribe to our channel from $ip_info->geoplugin_countryName </p>
                EOT;


}
else{
    echo <<<EOT
    <p class="small mb-0 ms-2 text-danger"> Subbscription fail </p>
   EOT;
}

?>