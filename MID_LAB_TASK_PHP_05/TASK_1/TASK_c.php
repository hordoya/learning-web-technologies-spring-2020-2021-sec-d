<?php
if(isset($_POST['submit'])){
echo $_POST['myname'];
}
else{
	echo "invalid";
}
?>







<html>
<head>
 <title>Name Input</title>
</head> 
<body>  
<form method = "post" action ="">      
<fieldset>
<legend>Name</legend>      
Name: <input type="text" name="myname" value="<?php echo $_POST['myname'] ?>" <br>
<input type = "submit" name = "submit" value="submit"><br>   
</form>   
</body>   
</html>