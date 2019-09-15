<!DOCTYPE html>
<html>

<body>
<h1>radio button </h1>
<form method="post" action="">
<h1>do you want fries?</h1>
<input type="radio" name="radio" value="yes">YES
<input type="radio" name="radio" value="no">NO
<input type="submit" name="submit">	
</form>
<hr>
You have selected <br>
<?php
if(isset($_REQUEST["radio"]))
{
	echo $_REQUEST["radio"];
}
else
{
	echo "nothing";
}
?>

</body>
</html>