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
<input type="radio"name="gender" value="male"<?php if(isset($_POST['gender'])&& $_POST['gender']=="male"){ echo "checked";} ?>>Male<br>
<input type="radio"name="gender" value="female"<?php if(isset($_POST['gender']) && $_POST['gender']=="female"){ echo "checked";} ?>>Female<br>

<input type="radio"name="gender" value="other"<?php if(isset($_POST['gender']) && $_POST['gender']=="other"){ echo "checked";} ?>>Other<br>
  <hr>
  <input type = "submit" name = "submit" value="submit"><br>
</form>   
</body>   
</html>