<?php 
require 'robot.php';
@import('form');
@import('cord_sql');


if (empty($_POST['email'] && $_POST['newpass'] && $_POST['oldpass'] && $_POST['newemail'])) {
	echo '<strong style="color: red;">your form must be fill</strong>';
}
elseif (empty($_POST['email'] || $_POST['newpass'] || $_POST['oldpass'] || $_POST['newemail'])) {
	echo '<strong style="color: red;">check and complete your form </strong>';
}
else{
  $email = strip_tags($_POST['email']);
  $newemail = strip_tags($_POST['newemail']);
  $newpass = strip_tags($_POST['newpass']);
 $oldpass = strip_tags($_POST['oldpass']);


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
		if (password_verify($oldpass, $relapass)) {
			

$hashnew= password_hash($newpass, PASSWORD_DEFAULT);
//sql wrkkkk*************

$sqlll="UPDATE anti SET user282200123=?, password282200123=?";

$rtrr=$conn->prepare($sqlll);
$rtrr->bindParam(1, $newemail);
$rtrr->bindParam(2, $hashnew);

$rtrr->execute();
 
echo 2;



		}
		else{
			echo '<strong style="color:red;">incorrect password</strong>';
		}
	}
}




}












?>