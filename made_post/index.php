
<!-- Html code goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
     <?php
     //   Import Seo Metal tags
     Seo('post board of kilogrammy', 'upload your content and make some cool cash', './images/logo.png', 'kilogrammy','made_post');
         ?>

   

<body>

     <?php
     // Import navigation Cpnts
     Import('../components/nav.php');

     // Import navigation Cpnts
  ?>


<div class="container px-3 my-3" >
    <center><h3>You Want to make a post</h3>
    <br>
    <b>Contact us on this Phone <a href="tel:+2348026626851">+2348026626851</a> through whatsapp</b>

</center>

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