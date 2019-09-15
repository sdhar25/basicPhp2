<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Password</h1>
<form method="post" action="">
	<h3>password is</h3>
	<input type="password" name="password">
	<br>
	<br>
	<input type="submit" name="submit">
	
</form>
<hr>
<?php
if($_REQUEST["password"]=="abcd")
{
	?>

	<h1>Password accepted WELCOME</h1>
	<?php
}
else
{
	echo "<h2>wrong</h2>";
}

?>
</body>
</html>