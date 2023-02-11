<?php

function Import($var = null)
{
  //    Import components
  if ($var == null) {
    echo '<p style="color:red;"> its like you have wrong directory in you import </p>';
  } else {
    require $var;
  }
}
function Seo($title, $description, $image, $site_name,$url)
{
  $keyword = str_replace(" ",", ",$description);
  echo <<<EOT
                 <title>$title</title>
                 <meta name="title" content="$title">
                 <meta name="description" content="$description.">
                 <meta name="keywords" content="$keyword, How to, Content marketing,Search engine optimization (SEO),Blogging tips,Writing for the web,Social media marketing,Digital marketing,Influencer marketing,Online branding,Content creation,Content strategy,Lifestyle,Fashion,Beauty,Food,Travel,Personal Development,Technology,Health,Fitness,Entrepreneurship">
                 <meta name="robots" content="index, follow">
                 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                 <meta name="language" content="English">
                 <meta name="revisit-after" content="5 days">
                 <meta name="author" content="Ademola Aduragbemi">
                 <meta charset="UTF-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
                 <link rel="canonical" href="https://kilogrammy.com/$url">
                 <meta property="og:locale" content="en_US">
                 <meta property="og:type" content="blog">
                 <meta property="og:title" content="$title">
                 <meta property="og:description" content="$description">
                 <meta property="og:url" content="https://kilogrammy.com/$url">
                 <meta property="og:site_name" content="Kilogrammy">
                 <meta property="og:image" content="$image">
                 <meta property="twitter:card" content="summary_large_image">
                 <meta property="twitter:url" content="$url">
                 <meta property="twitter:title" content="$title">
                 <meta property="twitter:description" content="$description">
                 <meta property="twitter:image" content="$image">
                 <link rel="stylesheet" href="./style/kilogrammy.css">     
                 <link rel="stylesheet" href="./style/style.css">
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"     integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="           crossorigin="anonymous" referrerpolicy="no-referrer" />
                 <link rel="stylesheet"           href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"           integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
                 <script src="https://kit.fontawesome.com/b0f29e9bfe.js" crossorigin="anonymous"></script>
                 <script defer src="./js/main.js"></script>
                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
                EOT;
  $tit = $title;
}




?>

