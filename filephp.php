<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Writing text of file</h1>
<form method="post" action="" enctype="multipart/form-data">
	Upload file:
	
	<input type="file" name="userfile">
	<br/>
	<br/>
	<input type="submit" name="submit">
	
</form>
<hr>
<?php
if(isset($_REQUEST["submit"]))
{
   echo "<br/> The file consist of- ";
   $handle=fopen($_FILES['userfile']['tmp_name'], "r");
   while(!feof($handle))
   {
   	$text = fgets($handle);
   	echo $text, "<br>";
   } 
   fclose($handle);
}

?>

</body>
</html>