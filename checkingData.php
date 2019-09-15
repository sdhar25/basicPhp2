<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	checking data
</h1>
<?php
$error_array=array();

if(isset($_REQUEST["submit"]))
{
checkData();
if(count($error_array)!=0)
{
	showError();
	showData();
}
else
{
	handleData();
}
}
else
{
showData();	
}
function checkData()
{
	global $error_array;
	if($_REQUEST["name"]=="")
	{
		$error_array[]="<font color='red'>Please enter name</font>";
	}
	if($_REQUEST["age"]=="")
	{
		$error_array[]="<font color='red'>Please enter age</font>";
	}
	if(!is_numeric($_REQUEST["age"]))
	{
		$error_array[]="<font color='red'>Please enter age in integer</font>";
	}
	if(is_numeric($_REQUEST["name"]))
	{
		$error_array[]="<font color='red'>use alphabets</font>";
	}
}
function showError()
{
	global $error_array;
	foreach ($error_array as $err) {
		# code...
		echo $err . "<br>";
	}
}
function handleData()
{
	echo "name is - ";
	//$ok_name= htmlentities($_REQUEST["name"]);
	$ok_name=strip_tags($_REQUEST["name"]);
	echo $ok_name;
	 
	echo "<br><br>";
	echo "age is- ".$_REQUEST["age"];
}
function showData()
{
	$name=isset($_REQUEST["name"]) ? $_REQUEST["name"] : showError();
	$age= isset($_REQUEST["age"]) ? $_REQUEST["age"] : showError();
?>
<form method="post" action="">
	enter name - <input type="text" name="name" value="<?php echo $name  ?>">
	<br><br>
	enter age- <input type="text" name="age" value="<?php echo $age  ?>">
	<br><br>
	<input type="submit" name="submit">
	
</form>
<?php	
}

?>
</body>
</html>