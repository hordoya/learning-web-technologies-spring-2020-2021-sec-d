<?php
if(isset($_POST['submit'])){
echo $_POST['gender'];
}

?>





<html>
<head>
 <title>Dob</title>
</head> 
<body>  
<form method = "post" action ="">      
<fieldset>
<legend>Gender</legend>      
<input type="radio"name="gender" value="male">Male<br>
<input type="radio"name="gender" value="female">Female<br>

<input type="radio"name="gender" value="other">Other<br>
  <hr>
  <input type = "submit" name = "submit" value="submit"><br>
</form>   
</body>   
</html>