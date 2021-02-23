<?php
if(isset($_POST['submit'])){
echo $_POST['birthday'];
}

?>






<html>
<head>
 <title>Name Input</title>
</head> 
<body>  
<form method = "post" action ="">      
<fieldset>
<legend>Date of birth</legend>      
Date of birth: <input type="date" name="birthday" value="" <br>
<input type = "submit" name = "submit" value="submit"><br>   
</form>   
</body>   
</html>