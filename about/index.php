
<?php
require '../workers/task.php';
?>
<!-- Html code goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
     <?php
     //   Import Seo Metal tags 
      Seo('Kilogrammy | Solution to question like what is, how to , secret of and latest more things that will make you happy more qustions and boging solution', 'Kilogrammy is a type of website that publish written content on a regular basis. we share personal thoughts and experiences, provide information on a particular subject, or as a platform for online journalism. The content on kilogrammy is usually organized and order with the most recent solution. Readers can leave comments and interact with the author, creating a sense of community. kilogrammy is a company or individual and can be personal, professional, or a combination of both you and me.
     ','./images/logo.png', 'kilogrammy web blog company','about');
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

<body>

     <?php
     // Import navigation Cpnts
     Import('../components/nav.php');

     // Import navigation Cpnts
  ?>


<div class="container px-3 my-3" >
    <center><h3>About us</h3>
</center>
<p>
"Welcome to Kilogrammy, an educational blog dedicated to providing high-quality, informative content for students, teachers, and lifelong learners.</p>
<p></p>
Our team consists of experienced educators, researchers, and subject-matter experts who are passionate about sharing their knowledge with others.</p><p>
 We believe that education should be accessible to all and strive to make our content engaging, easy-to-understand, and relevant to real-life situations.
 </p>
 <p>

At Kilogrammy, we take a unique approach to education, combining academic research with practical examples and hands-on activities.
</p>
<p> Our goal is to help our readers deepen their understanding of a wide range of subjects, from science and technology to history and the arts.
</p>
<p>

We are committed to providing our readers with the latest and most accurate information, and we continually review and update our content to ensure it remains relevant and up-to-date.
</p>
<p>

We hope that Kilogrammy becomes a valuable resource for you, and we welcome your feedback and suggestions.
</p>
<p> Feel free to get in touch with us via email at kilogram@kilogrammy.com, or follow us on github @ github.com/kilogrammie.
</p>
<p>

Thank you for visiting Kilogrammy, and we look forward to sharing our love of learning with you.
</p>
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