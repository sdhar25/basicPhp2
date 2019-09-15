<!DOCTYPE html>
<html>
<body>
<h1>Check box data</h1>
<form method="post" action="">
	<h3>Do you want fries?</h3>
	<input type="checkbox" name="check1" value="yes">YES
	<input type="checkbox" name="check2" value="no">NO
	<br/><br/>
	<input type="submit" value="submit">
	
</form>
<hr/>
You selected <br/>
<?php
if(isset($_REQUEST["check1"]))
{
	echo $_REQUEST["check1"];
	echo "</br>";
}
elseif(isset($_REQUEST["check2"]))
{
	echo $_REQUEST["check2"];
}
else
{
	echo "nothing";
}
?>
</body>
</html>