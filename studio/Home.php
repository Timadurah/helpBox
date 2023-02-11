
<?php 

require 'robot.php';

$DURAL_SQL="SELECT * FROM theme";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {

$theme = $key['theme'];
$font_size = $key['font_size'];
$font_family = $key['font_family'];

 }

require 'theme/'.$theme.'.php';

?>