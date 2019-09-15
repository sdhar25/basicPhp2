<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>what type of customer yoy are....?</h3>
<h2>Click the button to find out...</h2>
<form method="post" action="">
	<input type="hidden" name="customer" value="good">
	<br><br>
	<input type="submit" name="submit">
	

</form>
<hr>
<h2>we think </h2>
<?php
echo $_REQUEST["customer"];
?>
</body>
</html>