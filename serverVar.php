<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Server variable ex: </h1>
<?php
echo "you have ". $_SERVER["PHP_SELF"] . " on port ". $_SERVER["SERVER_PORT"];
echo "<br> and server name is- ". $_SERVER["SERVER_NAME"];

?>
</body>
</html>