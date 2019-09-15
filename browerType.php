<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Browser type</h1>
<form method="post" action="">
	click the button to know browser type - 
	<input type="submit" name="submit">
	
</form>
<hr>
<?php
if(isset($_REQUEST["submit"]))
{
	if(strpos($_SERVER["HTTP_USER_AGENT"],"Edge"))
	{
       echo "<marquee><h1>internet explorer </h1></marquee>";
	}
	elseif(strpos($_SERVER["HTTP_USER_AGENT"],"Firefox"))
	{
      echo "<h1> firefox </h1>";
	}
	else
	{
     echo "<h1> neither explorer nor firefox </h1>";
	}
}

?>
</body>
</html>