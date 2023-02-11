<?php
require '../workers/task.php';
?>
<!-- Html code goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
     <?php
     //   Import Seo Metal tags
     Seo('terms and condition of kilogrammy', 'terms and condition of kilogrammy website', './images/logo.png', 'kilogrammy', 'terms');     ?>
     
     <link rel="stylesheet" href="../style/kilogrammy.css">     
                <link rel="stylesheet" href="../style/style.css">
                <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">

</head>

<body>

     <?php

     // Import navigation Cpnts
     Import('../components/nav.php');

     // Import navigation Cpnts
  ?>


<div class="container px-3 my-3" >
    <center><h3>terms and condition</h3>
</center>
<p>
Acceptance of Terms and Conditions of Kilogrammy:
<br>
 By accessing and using this educational blog, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. </p>
<p>If you do not agree to these terms, you must not use this blog.</p>

Content: The content of this educational blog is provided for general information purposes only and is not intended as professional advice. </p>
<p>The information on this blog is provided in good faith, but no representation or warranty is given as to its accuracy, completeness, or usefulness.

Use of Information: The information provided on this blog is for personal use only and must not be used for commercial purposes. </p>
<p>You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information or content obtained from this blog.

Proprietary Rights: All content on this blog is protected by copyright, trademark, and other proprietary rights. </p>
<p>You must not use any content from this blog without obtaining prior written permission from the copyright owner.

User Conduct: You must not use this blog to post any illegal, harmful, or offensive material, including but not limited to: defamatory comments, threatening messages, and spam. </p>
<p>Any such behavior may result in the termination of your access to this blog.

Disclaimer: This educational blog and its content are provided on an "as is" basis without any warranties of any kind. </p>
<p>The blog owner, authors, and affiliates make no representations or warranties of any kind, express or implied, as to the completeness, accuracy, reliability, suitability, or availability with respect to the blog or the information, products, services, or related graphics contained in the blog for any purpose.

Limitation of Liability: The blog owner, authors, and affiliates shall not be liable for any damages or losses arising from the use of this blog or its content, including but not limited to indirect, incidental, special, or consequential damages.

Changes to Terms and Conditions: These terms and conditions may be revised at any time without prior notice. </p>
<p>It is your responsibility to periodically review these terms and conditions for any changes.</p>
<p>
Governing Law: These terms and conditions are governed by and construed in accordance with the laws of the jurisdiction in which the blog is hosted, and you agree to submit to the exclusive jurisdiction of that jurisdiction's courts.</p>
<p>
<b>
By accessing and using this educational blog, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions.</b>
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