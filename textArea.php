<!DOCTYPE html>
<html>

<body>
<form method="post" action="">
	Enter pizza toppingg;<br/>
     <textarea rows="5" cols="40" name="data">
1.
2.
3.
4.
     </textarea>


	<br/>
	<input type="submit" value="submit">
	
</form>
<hr/>
<h3>
You ordered the pizza with: <br/>
</h3>
<?php
$text=$_REQUEST["data"];
echo str_replace("\n", "<br>", $text);
  ?>
</body>
</html>