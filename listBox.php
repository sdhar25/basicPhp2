<!DOCTYPE html>
<html>
<body>
<h1>Listbox</h1>
<form method="post" action="">
	<h3>Select your favourite ice cream flavour- </h3>
	<select name="icecream[]" multiple>
		<option>vanilla</option>
		<option>strawberry</option>
		<option>chocolate</option>
		<option>kesar pista</option>
		
	</select>
</br></br>
	<input type="submit" name="submit">
</form>

</hr>
selected item is- 
<?php
foreach($_REQUEST["icecream"] as  $value) {
	# code...
	echo $value;
	echo "</br>";
}
?>
</body>
</html>