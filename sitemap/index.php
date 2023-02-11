
<?php
require '../workers/task.php';
require '../conf/config.php';

?>
<!-- Html code goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
     <?php
     //   Import Seo Metal tags
     //   Seo();
     ?>
     <link rel="stylesheet" href="../style/kilogrammy.css">     
    <link rel="icon" href="../images/logo.svg">
    <link rel="stylesheet" href="../style/style.css">
     <!-- bootrap cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
          integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- bootrap icons -->
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
          integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="shortcut icon" href="../images/logo/k.png" type="image/x-icon">

</head>

<body style="overflow-x: hidden;">

     <?php
     // Import navigation Cpnts
     Import('../components/nav.php');

     // Import navigation Cpnts
  ?>


<div class="container my-3" >
    <center><h3>Our Sitemap</h3>
</center>
<br>
<div class="d-flex flex-wrap align-items-center" style="width: 100vw; overflow-x: hidden;">
<?php



$data = $conn->query("SELECT * FROM blog order By id DESC LIMIT 100")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
                 $topicc = $row['custom_url'];
                    echo <<<EOT
                   
<div class="col-4 col-lg-2 m-1"> <ol><a href="https://kilogrammy/kilogrammy/$topicc">$topicc</a></ol></div>
EOT;

}

  

            
            
            
            
            
            
                              
        ?>    

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
        

    const input = document.getElementById("search_Box");
    input.addEventListener("keyup", (event) => {
        if (event.keyCode === 13) {
            Search(input.value);
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