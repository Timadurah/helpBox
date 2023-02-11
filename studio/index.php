


<?php 
require 'robot.php';
@import('cord_sql');
if(isset($_SESSION['___'])){
  header("location:home.php");
 
}
?>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
    <title>Laboratory || Develope By SciDream</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="72x72" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="114x114" href="battery-charging.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="stylesheet" href="/ADMIN_files/swiper.min.css">


<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script> 
    <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">
<style type="text/css">
  




body{
  overflow-x: hidden;
}
body {
  min-height: 100vh;
  min-height: -webkit-fill-available;
}

html {
  height: -webkit-fill-available;
}

main {
  display: flex;
  flex-wrap: nowrap;
  height: 100vh;
  height: -webkit-fill-available;
  max-height: 100vh;
  overflow-x: auto;
  overflow-y: hidden;
}

.b-example-divider {
  flex-shrink: 0;
  width: 1.5rem;
  height: 100vh;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
  vertical-align: -.125em;
  pointer-events: none;
  fill: currentColor;
}

.dropdown-toggle { outline: 0; }

.nav-flush .nav-link {
  border-radius: 0;
}

.btn-toggle {
  display: inline-flex;
  align-items: center;
  padding: .25rem .5rem;
  font-weight: 600;
  color: rgba(0, 0, 0, .65);
  background-color: transparent;
  border: 0;
}
.btn-toggle:hover,
.btn-toggle:focus {
  color: rgba(0, 0, 0, .85);
  background-color: #d2f4ea;
}

.btn-toggle::before {
  width: 1.25em;
  line-height: 0;
  content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
  transition: transform .35s ease;
  transform-origin: .5em 50%;
}

.btn-toggle[aria-expanded="true"] {
  color: rgba(0, 0, 0, .85);
}
.btn-toggle[aria-expanded="true"]::before {
  transform: rotate(90deg);
}

.btn-toggle-nav a {
  display: inline-flex;
  padding: .1875rem .5rem;
  margin-top: .125rem;
  margin-left: 1.25rem;
  text-decoration: none;
}
.btn-toggle-nav a:hover,
.btn-toggle-nav a:focus {
  background-color: #d2f4ea;
}

.scrollarea {
  overflow-y: hidden;
}

.fw-semibold { font-weight: 600; }
.lh-tight { line-height: 1.25; }
.bg-alice{

    background:linear-gradient(105deg,aliceblue,white) !important;

}.bg-tr{

    background:transparent !important;

}

.card {
    border: none;
    margin-bottom: 2.2rem;
}

.card {
    word-wrap: break-word;
    background-clip: border-box;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.7rem;
    display: flex;
    flex-direction: column;
    min-width: 0;
    position: relative;
}

.sidoscroll {
  overflow-y: scroll;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}

.sidoscroll::-webkit-scrollbar {
  width: 0.5rem;
}

.sidoscroll::-webkit-scrollbar-track {
  background: #fff;
}

.sidoscroll::-webkit-scrollbar-thumb {
  background-image: linear-gradient(200deg,aliceblue,gray);
  border-radius:100px;
}




.bottomscroll {
  overflow-x: scroll;
  overflow-y: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}

.bottomscroll::-webkit-scrollbar {
  height: 0.5rem;
}

.bottomscroll::-webkit-scrollbar-track {
  background: #fff;
}

.bottomscroll::-webkit-scrollbar-thumb {
  background-image: linear-gradient(350deg, aliceblue,gray);
  border-radius:100px;
}






.anit{
position: absolute;
bottom: 0;
left: 0;
}
.shadoww {
box-shadow: 0px 0px 10px gray !important;}
.ana{
transition: 1s;
  animation: ana infinite;
  animation-duration: 2s;  
}
.aaa{

transition: 1s;
background-image: linear-gradient(to right ,green,gray);
  animation: anaa infinite;
  animation-duration: 3s; 


}


.timeo{

transition: 1s;

}
.timeo > * {

transition: 1s;
  animation: nn infinite;
  animation-duration: 2s; 


}

.loadanim{
transition: 1s;
  animation: ll infinite;
  animation-duration: 1s; 
}
@keyframes ll {

  0%{
transform: scale(0.5);  
}
   
50%{
transform: scale(1);  

   }  
100%{
transform: scale(0.5);  

   }
  
}
@keyframes nn {

  from{
opacity: 0.8;
  }
   
to{
opacity: 1;

   }
  
}


@keyframes anaa {

  
   to{
    background-position: -170% 0;

   }
  
}
@keyframes ana {

  0%{background: blue;
  }
  25%{background: lightblue;
  }
   50%{background: darkblue;}0%{background: blue;
  }
  75%{background:lightblue;
  }
   100%{background: darkblue;}
  
}
.ang{
transition: 1s;
  animation: ang infinite;
  animation-duration: 2s;  
}


@keyframes ang {

  0%{background: orange;
  }
  25%{background: orangered;
  }
   50%{background: red;}0%{background: orange;
  }
  75%{background: orangered;
  }
   100%{background: red;}
  
}
.ang{
transition: 1s;
  animation: ang infinite;
  animation-duration: 2s;  
}


@keyframes ang {

  0%{background: orange;
  }
  25%{background: orangered;
  }
   50%{background: red;}0%{background: orange;
  }
  75%{background: orangered;
  }
   100%{background: red;}
  
}


img{
  filter: brightness(120%);
}
.form-control-dark {
  color: #fff;
  background-color: var(--bs-dark);
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  color: #fff;
  background-color: var(--bs-dark);
  border-color: #fff;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}
.bi2{
  vertical-align: -.125em;

}
.bi {
  vertical-align: -.125em;
  fill: #7c067c;
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle {
  outline: 0;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 12rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 50%;
  height: 12rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

@media (min-width: 992px) {
  .rounded-lg-3 { border-radius: .3rem; }
}


/*scroll*/
.scrolldural {
  overflow-x: scroll;
  width: 95%;
  margin-left: 5%;
  display: flex;
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.scrolldural::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */

  }
.scrollhide {
  overflow-x: scroll;
  width: 100%;
  display: flex;
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.scrollhide::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */

  }


.scrolldural > div{
  background: white;
  flex-shrink: 0;
  margin-left: 5px;
display: flex;
justify-content: center;

}





.scroll_hide {
  overflow-x: scroll;
  width: 100%;
  display: flex;
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.scroll_hide::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */

  }


.scroll_hide > div{
  flex-shrink: 0;
display: flex;

}



/*inside scroll*/





.bi {
  vertical-align: -.125em;
  fill: #7c067c;
}

.feature-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 4rem;
  height: 4rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  color: #fff;
  border-radius: .75rem;
}

.icon-link {
  display: inline-flex;
  align-items: center;
}
.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  transition: transform .25s ease-in-out;
  fill: #7c067c;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  font-size: 1.5rem;
  border-radius: .75rem;
}

.rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

/* posts */

.posts-d{
width: 100%;
flex-wrap: wrap;
display: flex;
}
.posts-d > div{
  flex-basis: 300px;
 
}
.userhov{
  cursor: pointer;
  width: 150px;
  height: 50px;
  display: flex;
  align-items: center;justify-content: center;
  color: gray;font-size: 20px;font-family: serif;
}

/* end of post */
/* resp */

.bg-twist-bold{
background-image: linear-gradient(200deg, aliceblue,gray);}
.bg-twist{
background-image: linear-gradient(200deg, aliceblue,gray);}

  .scr_none{
    overflow-x: hidden !important;
  }



/*=========================================
    SMart Phone Device
===========================================*/

@media (min-width: 100px) and (max-width: 991px){
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100% !important;
    padding: 0 !important; 
    margin-right: auto !important; 
    margin-left: auto !important;
}



.m-larg{
  width: 100%;
}
.n{
  display: none !important;
}
/*scroll*/
.scrolldural {
  overflow-x: scroll;
  width: 100%;
  margin-left: 1% !important;
  display: flex;
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}

.scrolldural > div{
width: 200px !important;
}
.pc-none{
  display: flex !important;
}
  .d-dural-flex-child2{
    background-color: white;
    width: 100% !important;
  }
  
  .d-dural-flex-child1{
    background-color: white;
    width: 100% !important;
  }
  .d-dural-flex-child22{
    background-color: white;
    width: 100% !important;
  }
  
  .d-dural-flex-child11{
    background-color: white;
    width: 100% !important;
  }
 
.d-dural-flex{
  flex-direction: column-reverse;
  }
  .d-dural-flex > div{
    width: 100%;
  }

  .scr_none{
    overflow-x: hidden !important;
  }



  
  .r-dural-flex-child2{
    background-color: white;
    width: 100% !important;
  }
  
  .r-dural-flex-child1{
    background-color: white;
    margin: 0;
    width: 100%;
  }
  .dp-5{
    padding-top: 3rem !important;
  }
 
.r-dural-flex{
  flex-direction: column;
  }
  .r-dural-flex > div{
    margin: 0;
    width: 100%;
  }
  .posts-d{
    display: flex;
flex-direction: column;
  } .posts-d > div{
    flex-grow: 1;
    width: 100%;
  }
  .res_text_small{
    font-size: 10px;
    padding: 3px;
  }
  .res_text_big{
    font-size: 12px;
    padding: 3px;
  }

  .res_text_smalld{
    font-size: 10px !important;
    color: rgb(94, 89, 89);
    padding: 3px;
  }
 .m-none{
   display: none  !important;
 }
 .m-p-fixed{
   position: fixed !important;
  top: 0 !important;
  display: flex !important;
   left: 0 !important;
z-index: 10;
width: 100% !important;
height: 100% !important;
overflow-y: scroll;
-ms-overflow-style: none !important;  /* Internet Explorer 10+ */
    scrollbar-width: none !important;  /* Firefox */
 }

  .dural_res_none{
    display: block;
  }


  .m-fixed{
    position: fixed; 
    bottom:0;
    left: 0;
  }
  



  .m-p-4{
    padding-bottom: 100px !important;
  }




}









.m-p-fixed{

  display: none;
}

.dp-5{
  padding: 0;
}
.dural_res_none{
  display: none;
}


























.res_text_smalld{
  cursor: pointer;
  font-size: 13px;
  color: rgb(94, 89, 89);
  padding: 3px;
}


.d-dural-flex-child1{
  width: 30%;
  background-image: white;
}


.d-dural-flex-child2{
  width: 70%;
  background-image: white;
}

.d-dural-flex-child11{
  width: 40%;
  background-image: white;
}


.d-dural-flex-child22{
  width: 60%;
  background-image: white;
}


.d-dural-flex{
  display: flex;

}




.r-dural-flex-child2{
  width: 40%;
  margin: 10px;
  background-image: white;
}


.r-dural-flex-child1{
  width: 50%;
  margin: 10px;
  background-image: white;
}


.r-dural-flex{
  display: flex;

}

.invoice_blog{
  margin: 0;
padding: 0 20px;
line-height: 26px;
}
.padding_infor_info {
  padding: 35px 35px;
      padding-bottom: 35px;
  float: left;
  width: 100%;
}
.full {
  width: 100%;
  float: left;
}
.padding-bottom_0 {
  padding-bottom: 0 !important;
}
.graph_head {
  padding: 18px 25px 15px;
  float: left;
  width: 100%;
  border-bottom: solid #f3f3f3 2px;
}
.white_shd {
  background: rgb(236, 235, 235);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
  border-radius: 5px;
  margin-top: 0;
}
.margin_bottom_30 {
  margin-bottom: 30px;
}
.invoice_blog .ipv strong {
  font-weight: 500;
  color: #15283c;
}
.invoice_blog .ipv {
  margin: 0;
  padding: 0 20px;
  line-height: 26px;
}
.ipv {
  color: #58718a;
  font-size: 14px;
  line-height: 21px;
}
.pc-none{
  display: none;
}

.ann{

  position: relative;
  transition: 2s;
  animation: ann infinite;
  animation-duration: 2s;
}

@keyframes ann {
  0% {bottom:100px; left: 0%; transform: rotate(100deg);}
  20% {bottom:-10px; left: 0%; transform: rotate(50deg);}
  25% {bottom:50px; left: 10%; transform: rotate(50deg);}
  30% {bottom:-10px; left: 20%; transform: rotate(50deg);}
  40% {bottom: 50px; left: 30%; transform: rotate(-50deg);}
  50% {bottom:-10px; left: 40%; transform: rotate(-50deg);}
  60% {bottom: 50px; left: 50%;transform: rotate(50deg);}
  70% {bottom:-10px; left: 60%; transform: rotate(50deg);}
  80% {bottom: 50px; left: 70%;transform: rotate(-50deg);}
  90% {bottom:-10px; left: 80%; transform: rotate(-50deg);}
  95% { transform: rotate(50deg);}
  96% { transform: rotate(60deg);}
  97% { transform: rotate(70deg);}
  98% { transform: rotate(80deg);}
  99% { transform: rotate(90deg);}
  100% {bottom:100px; left: 90%; transform: rotate(100deg);}
  
}


.arrow_sms_r{
  min-height: 60px;
  text-align: right;
  position: relative;
  background-color: rgb(187, 143, 187);
   border-radius: 10px 20px 20px 10px;
   border-left: 5px solid rgb(167, 115, 167);

}

.arrow_sms_r::after {
  content: " ";
  position: absolute;
  top: 35%;
  left: 100%; /* To the right of the tooltip */
  border-width: 10px;
  border-style: solid;
  border-color: transparent transparent transparent rgb(182, 135, 182);
}



.arrow_sms_rr{
  position: relative;
background-image: linear-gradient(200deg, rgb(0, 0, 0),rgb(247, 106, 3));

}

.arrow_sms_rr::after {
  content: " ";
  position: absolute;
  top: 30%;
  left: 100%; /* To the right of the tooltip */
  border-width: 10px;
  border-style: solid;
  border-color: transparent transparent transparent rgb(247, 106, 3);
}

.arrow{
    position: relative;
height:50px;
width: 100px;
 text-align: center;
  border-right: 1px solid gray; 
   color: white;
    border-radius: 10px;
}

.arrow::after {
  content: " ";
  position: absolute;
  top: 35%;
  left: 100%; /* To the right of the tooltip */
  border-width: 10px;
  border-style: solid;
  border-color: transparent transparent transparent purple;
}


.arrow_sms_l{
  min-height: 60px;
  text-align: left;
  position: relative;
  background-color: rgb(245, 244, 244); 
  border-radius: 20px 10px 10px 20px;  
border-right: 5px solid rgb(218, 216, 216);
}
  
  .arrow_sms_l::after {
    content: " ";
    position: absolute;
    top: 35%;
    right: 100%; /* To the right of the tooltip */
    border-width: 10px;
    border-style: solid;
    border-color: transparent rgb(238, 235, 235) transparent transparent;
  }



  

  



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



      .net_activee{
        cursor: pointer !important;
background-color: aliceblue !important;
      } 
      .net_active{
        cursor: pointer !important;
   }

      .active_row{
        cursor: pointer !important;
         color: white !important; 
background-color: black !important;    
      } 
      .row_menu{
            flex-shrink: 0 !important;
        height: 50px; 
        cursor: pointer !important;
         color: gray; 
         border-bottom: 0px solid transparent !important;
      }





  
</style>
    <!-- Custom styles for this template -->
    <link href="ADMIN_files/sidebars.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="ADMIN_files/headers.css" rel="stylesheet">
  
<body class="sidoscroll" >
<br><br>









<center>


<div class="d-dural-flex-child2 p-3">




<h2 style="font-weight: bolder;">Admin Gate</h2>
<br>


    
                
                


<div class="d-dural-flex-child1 p-3 ">


    <small class="text-muted" id="datadiv"></small>
</div>


<div class="d-dural-flex-child2 bg-light p-3" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">
                        

    <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="daddy.php" id="security">
        <div class="form-floating mb-3">
          <input type="email" name="email" required="" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" required="" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>        
        <button class="w-100 btn btn-lg btn-primary bg-twist" type="submit" style="border: none;">Edit</button>
        <hr class="my-4">
        <small class="text-muted"><span style="color:pink;">Forget password?</span> Contact the Admin For Retrieve of Password </small>
      </form>
                             
                                          
                                              
</div>
</div>
                
</div>

    </center>
<script>
  


$("#security").on('submit',function(e){

  e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
  var d = data;
  var e =  2;
  if (d == e) {
    $("#datadiv").html('<strong style="color:green;">Logging in......</strong>'); 

setTimeout(function () {
  // body...
  
  window.location.replace('home.php');


  },3000);


  }
  else{
$("#datadiv").html(data); 
}
} 

});
});


</script>










<footer class="footer mt-5 py-3 text-white bg-twist-bold">

          <center>
  <p style="font-weight:800;">Develope and Design @ <a href="http://www.Netpacks.net" style="text-decoration: none;">Netpacks</a> Packages</p>
</center>
    
</footer>
  
<!-- footer -->
<!-- end footer --> 
<script src="/ADMIN_files/swiper.min.js"></script>


</body></html>