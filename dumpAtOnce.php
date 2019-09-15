<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Dumping at once</h1>
<form method="post" action="">
	enter your age  <input type="text" name="age">
	<br><br>
	how many siblings you have? <input type="text" name="sib">
	<br><br>
	flavour of ice cream: 
	<select name="icecream[]" multiple>
		<option>vanilla</option>
		<option>strawberry</option>
		<option>chocolate</option>
		<option>kesar pista</option>
		
	</select>
	<br><br>
	<input type="submit" name="submit">
	
</form>
<hr/>
<br>
<h2>dumping.....</h2>
<?php
if(isset($_REQUEST["submit"]))
{
	foreach ($_REQUEST as $key => $value) {
		# code...
		if(is_array($value))
		{
			foreach ($value as $item) {
				# code...
				echo $key. " => ". $item;
				echo "<br>";
			}
		}
		else
		{
			echo "<br>".$key. " => ". $value;
		}
	}

}

?>
</body>
</html>