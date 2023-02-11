<?php

$queryString = http_build_query([
    'access_key' => 'a3b7142d433357483e1964c25dd9e54b',
    'keywords' => 'Wall street -wolf', // the word "wolf" will be
    'categories' => '-sports',
    'sort' => 'popularity',
  ]);
  
  $ch = curl_init(sprintf('%s?%s', 'https://api.mediastack.com/v1/news', $queryString));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $json = curl_exec($ch);
  
  curl_close($ch);
  
  $apiResult = json_decode($json, true);
  
  print_r($apiResult);

?>