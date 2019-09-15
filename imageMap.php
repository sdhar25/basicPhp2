<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Handling imagemap</h1>
<form method="post" action="">
	click the image:
	<br/>
	<input name="imap" src="img\Best.jpg" type="image" alt="friends">
	
</form>
<hr>
<h2>You have clicked the image map at:- </h2>
<?php
echo "(". $_REQUEST["imap_x"]. " , ". $_REQUEST["imap_y"] . ")";

?>

</body>
</html>