<?php 
require 'robot.php';
@import('form');
@import('cord_sql');


if (empty($_POST['email'] && $_POST['pass'])) {
	echo '<strong style="color: red;">your form must be fill</strong>';
}
elseif (empty($_POST['email'] || $_POST['pass'])) {
	echo '<strong style="color: red;">check and complete your form </strong>';
}
else{
  $email = strip_tags($_POST['email']);
  $pass = strip_tags($_POST['pass']);


$DURAL_SQL="SELECT * FROM anti WHERE user282200123=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {
	echo '<strong style="color:red;">Incorrect email Or password</strong>';
}
else{
	foreach ($DURAL as $key) {
		$relapass=$key['password282200123'];
		if (password_verify($pass, $relapass)) {
			echo 2;
            $_SESSION['___'] = $pass;
            $_SESSION['___e'] = $email;
		}
		else{
			echo '<strong style="color:red;">incorrect password</strong>';
		}
	}
}




}












?>