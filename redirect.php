<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	Redirecting
</h1>
<form method="post" action="">
	click on button for welcome.html 
	<input type="submit" name="button" value="welcome">
</form>
<hr>
<form method="post" action="">
	click on button for hello.html
	<input type="submit" name="button" value="hello">
</form>
<hr>
<?php
if(isset($_REQUEST["button"]))
{
  
  $redirect = "Location: ". $_REQUEST["button"]. ".html";
  echo header($redirect);
}


?>
</body>
</html>