<?php
if(isset($_POST['submit'])){
echo $_POST['email'];
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
<legend>Email</legend>      
Email: <input type="text" name="email" value="" <br>
<input type = "submit" name = "submit" value="submit"><br>   
</form>   
</body>   
</html>