<?php
if(isset($_POST['submit'])){
echo $_POST['Blood'];
}

?>





<html>
<head>
 <title>Dob</title>
</head> 
<body>  
<form method = "post" action ="">      
<fieldset>
<legend>Degree</legend>  
<select name="Blood">    
<option value="Click">Click</option>
<option value="A+" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="A+"){ echo "selected";} ?>>A+</option>
<option value="A-" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="A-"){ echo "selected";} ?>>A-</option>
<option value="B+" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="B+"){ echo "selected";} ?>>B+</option>
<option value="B-" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="B-"){ echo "selected";} ?>>B-</option>
<option value="AB+" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="AB+"){ echo "selected";} ?>>AB+</option>
<option value="AB-" <?php if(isset($_POST['Blood'])&& $_POST['Blood']=="AB-"){ echo "selected";} ?>>AB-</option>
</select>
  <hr>
  <input type = "submit" name = "submit" value="submit"><br>
</form>   
</body>   
</html>