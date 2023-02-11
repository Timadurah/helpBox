<?php
require '../conf/config.php';

echo <<<EOT

    
<section class="content-section">
        <div class="d-flex flex-wrap container">

            
            <!-- +contents -->
EOT;

if (!empty($_POST['query'])) {
    $search = $_POST['query'];
    $stmt = $conn->prepare("SELECT * from blog where topic like '%$search%' or textbox like '%$search%' order by id DESC LIMIT 100");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '    <center> <h1 style="font-family:algerian;"> ' . $search . ' Not Found</h1><br><br><br></center> ';
    } else {
        foreach ($result as $row) {
            $topicc = $row['topic'];
                 $url = $row['custom_url'];
                 $img = $row['img1'];
                 $textbox =substr($row['desc'],0,160);
                 $category =ucwords($row['category']);
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

    }
} else {
    echo '    <center><h1 style="font-family:algerian;"> Enter some word to search</h1></center> ';
}


echo <<<EOT


</div>
</section>


EOT;
?>