
<?php 
@import('cord_sql');
if(isset($_SESSION['___'])){
  $pass = $_SESSION['___'];
  $email = $_SESSION['___e'];
  
}

$DURAL_SQL="SELECT * FROM anti WHERE user282200123=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {
  header("location:index.php");
}

else{
	foreach ($DURAL as $key) {
		$relapass=$key['password282200123'];
		if (!password_verify($pass, $relapass)) {
      header("location:index.php");
		}
    else{
?>



<!DOCTYPE html>
<html>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
  <head>  
   <title>Laboratory || Develope By Kilogrammy</title>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="./imgs/logo.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="./imgs/logo.jpg">
<link rel="apple-touch-icon" sizes="72x72" href="./imgs/logo.jpg">
<link rel="apple-touch-icon" sizes="114x114" href="./imgs/logo.jpg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="./imgs/logo.jpg" type="image/x-icon">

<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script> 
    <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

         <script src="ADMIN_files/bootstrap.js"></script>

    <?php  require 'css/'.$theme.'_css.php'; ?>
</head>


<body class="sidoscroll d-flex" onload="$space_nav_loader('tracker.php','sign','0')">





  
<div class="alert alert-dismissible fade show w-100 p-5 h-50 bg-danger fw-bold" style="font-family: algerian;" role="alert"> <a href="#" class="alert-link"> Github Dev </a>. !! This themes is on developement !!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>



<div id="loaderBody" style="width: 100vw; height: 100vh; position: fixed; bottom: 0%; right: 0%;background-color: white; z-index: 15;display: flex;justify-content: center;align-items: center; ">
  

<img src="./imgs/logo.jpg" width="30%" class="p-2 loadanim">

</div>



<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
  </symbol>

  <symbol id="bloggraph" viewBox="0 0 16 16">
   <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"></path>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"></path>
  </symbol>
  <symbol id="calc" viewBox="0 0 16 16">

 <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
</symbol>

  <symbol id="table" viewBox="0 0 16 16">
     <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </symbol>


  <symbol id="question_easy" viewBox="0 0 16 16">
   <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"></path>
  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"></path>
  </symbol>

  <symbol id="graph" viewBox="0 0 16 16">
  
<path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>


  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"></path>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"></path>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"></path>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"></path>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"></path>
  </symbol>
</svg>




<div class="d-flex flex-column flex-shrink-0 bg-white n" style="width: 4.5rem;">
    <a href="/" class="d-block p-3 link-dark text-decoration-none border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
      <img src="./imgs/logo.jpg" width="40" height="45.4" class="rounded">

    </a>




    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" id="net_active">
      <li style="height: 20vh;"></li>
      <li class="nav-item">
        <a href="#" class="net_active nav-link py-4 net_activee" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home" onclick="$space_nav_loader('tracker.php','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="net_active nav-link py-4" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="blog" onclick="$space_nav_loader('upgradeblog.php','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#bloggraph"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="net_active nav-link py-4" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders" onclick="$space_nav_loader('list.html','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
        </a>
      </li>
        <li>
        <a href="#" class="net_active nav-link py-4" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Calculator" onclick="$space_nav_loader('calc.php','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#calc"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="net_active nav-link py-4" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="stact" onclick="$space_nav_loader('tracker.php','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#graph"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class=" net_active nav-link py-4" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Helps" onclick="$space_nav_loader('help.php','sign')">
          <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#question_easy"></use></svg>
        </a>
      </li>
    </ul>


    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
          <svg class="bi" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('sponsors.php','sign')">sponsors</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('about_us.php','sign')">about us</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('banner.php','sign')">banner</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('review.html','sign')">Review</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('our_service.php','sign')">our services</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('social_link.html','sign')">Social Medial</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('Security.html','sign')">Settings</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('apperance.php','sign')">Appearance</a></li>
        <li><a class="dropdown-item" href="#" onclick="$space_nav_loader('Profile.php','sign')">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>

























<div class="d-flex flex-column n align-items-stretch flex-shrink-0 bg-alice" style="width: 380px; border-right: 1px solid #dee2e6!important;">
    <a href="/" class="d-flex align-items-center flex-shrink-0 p-4 link-dark text-decoration-none border-bottom" style="background-color: #f7fdff;">
      <span class="fs-5 fw-bold">DashBoard</span>
    </a>
    <div class="list-group list-group-flush scrollarea px-3 bg-alice">
     
<div class="d-flex my-3 justify-content-between">
  <div class="p-2 bg-twist fw-bold text-white rounded-3"> New Blogs </div>

<strong style="columns: lightblue; font-weight: 900;">Show all <span style="color: darkblue;">144</span></strong>
</div>



      <a href="#" class="list-group-item list-group-item-action py-3 lh-tight bg-tr">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1 fw-bold">List of new post blog</strong>
          <small class="text-muted p-3 rounded-4 shadow fw-bold" style="color: aliceblue;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg> </small>
        </div>
        <div class="col-10 mb-1 small">Some placeholder.</div>
      </a>


      <a href="#" class="list-group-item list-group-item-action py-3 lh-tight bg-tr">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1 fw-bold">List of new post blog</strong>
          <small class="text-muted p-3 rounded-4 shadow fw-bold" style="color: aliceblue;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg> </small>
        </div>
        <div class="col-10 mb-1 small">Some placeholder.</div>
      </a>

      <a href="#" class="list-group-item list-group-item-action py-3 lh-tight bg-tr">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1 fw-bold">List of new post blog</strong>
          <small class="text-muted p-3 rounded-4 shadow fw-bold" style="color: aliceblue;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg> </small>
        </div>
        <div class="col-10 mb-1 small">Some placeholder.</div>
      </a>

      <a href="#" class="list-group-item list-group-item-action py-3 lh-tight bg-tr">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1 fw-bold">List of new post blog</strong>
          <small class="text-muted p-3 rounded-4 shadow fw-bold" style="color: aliceblue;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg> </small>
        </div>
        <div class="col-10 mb-1 small">Some placeholder.</div>
      </a>





    </div>

<div class="p-2 btn btn-primary my-2 mx-3 fw-bold d-flex justify-content-center align-items-center" onclick="$space_nav_loader('upgradeblog.php','sign')">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi2 bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
Create New Page
</div>


<center><div class="d-flex my-3 justify-content-center">
<button class="btn-outline-primary p-3 shadow rounded-4" style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></button>
<button class="btn-outline-primary p-3 shadow rounded-4 mx-2"  style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></button>
<button class="btn-outline-primary p-3 shadow rounded-4" style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></button>
</div>
<strong class="fw-bold text-muted"> Developed @ Netpacks.net</strong></center>
  </div>


































<div class="d-dural-flex-child2 p-3 w-100 sign">




<h2 style="font-weight: bolder;">Menu</h2>
<br>


    
    <div class="d-flex align-items-center bottomscroll w-100" style="padding-left: 20px; height:50px;" id="menu_row">

    <div onclick="$space_load('stact.php','sign')" class="p-2 active_row text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Home           </div>

        <div  onclick="$space_nav_loader('list.html','sign')"  style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
         Create-store
           </div>
               <div  onclick="$space_nav_loader('productss.php','sign')"  style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
Store              </div> 

              <div  onclick="$space_nav_loader('upgradeblog.php','sign')"  style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
             Create-Blog
               </div>    
       <div  onclick="$space_nav_loader('blogss.php','sign')"  style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
             Blogs
               </div>
                <div  onclick="$space_nav_loader('draftss.php','sign')"  style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
             Drafts
               </div>          

                 
                 <div onclick="$space_load('social_link.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none" >
             Social-link
                </div>
                 <div onclick="$space_load('detail.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary" >
Visitors                </div>
                
               <div onclick="$space_load('profile.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
        Profile
            </div>
            <div onclick="$space_load('galls.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
       Gallery
            </div>
            <div onclick="$space_load('images.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
       Images
            </div>
            <div onclick="$space_load('about_us.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
About
                </div>
                <div onclick="$space_load('sponsors.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Sponsor-list
                </div>
                <div onclick="$space_load('banner.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Banner
                </div>
                 <div onclick="$space_load('banners.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
Banner-list
                </div>
                
                <div onclick="$space_load('our_service.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Service
                </div> 
                <div onclick="$space_load('our_services.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
                Service-list
                </div>
                <div onclick="$space_load('review.html','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Review
                </div> <div onclick="$space_load('reviews.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary">
               Review-list
                </div>
                <div onclick="$space_load('apperance.php','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Appearance                </div>
                <div onclick="$space_load('Security.html','sign')" style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Security
                </div>  <a href="logout.php" style="text-decoration: none;"> <div style="    flex-shrink: 0;" class="p-2 text-small res_text_small menu_row btn-sm fw-bold mx-2 btn btn-outline-secondary pc-none">
Logout
                </div></a>
    
                    </div>
                
                







<br>
                    <div class="d-dural-flex" id="sign" style="transition-delay: 2s;">
                        



                  </div>
                
                </div></div>
</div>




<br>
<br>





<script src="ADMIN_files/editor.js"></script>
<script src="ADMIN_files/Sci.js"></script>
<script src="ADMIN_files/sidebars.js"></script>


<script>




var www = 1;

function toggle_code(textarea,input) {
if (www === 1) {

    var htmlcode = $("#"+textarea).html();
    $("#"+textarea).hide();
   $("#"+input).show();
$("#"+input).val(""+htmlcode);
www++;
}
else if(www === 2) {

    var htmlcode = $("#"+input).val();
    $("#"+input).hide();
   $("#"+textarea).show();
$("#"+textarea).html(""+htmlcode);

    www--;

}



}

(function () {
setTimeout(function () {

$("#loaderBody").hide();

},3000);

})()
   





  //  @media js
  if (window.matchMedia('(max-width:600px)').matches) {



}
else{


}






</script>

</body></html>

<?php
  }}}
?>

