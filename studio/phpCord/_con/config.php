﻿<?php
// do not edit this if you dont understand what is all about 

// strict requirement don not touch this !
declare(strict_types=1); 



// db configuration


// be careful when changing any thing here

 // change you host name from localhost to yours and database name to yours
$dsn="mysql:host=localhost;dbname=dlab1";
// you can set user here
$username="root";
// you can set password here
$password="";


$conn = new PDO( $dsn, $username, $password );
 try {  $conn = new PDO( $dsn, $username, $password );  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); } catch ( PDOException $e ) {  echo "Connection failed: " . $e->getMessage(); }


?>