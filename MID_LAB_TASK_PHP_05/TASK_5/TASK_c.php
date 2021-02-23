<?php
if(isset($_POST['submit'])){
echo $_POST['degree'];
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
<input type="radio"name="degree" value="ssc" <?php if(isset($_POST['degree'])&& $_POST['degree']=="ssc"){ echo "checked";} ?>>ssc<br>
<input type="radio"name="degree" value="hsc" <?php if(isset($_POST['degree']) && $_POST['degree']=="hsc"){ echo "checked";} ?>>hsc<br>

<input type="radio"name="degree" value="Bsc" <?php if(isset($_POST['degree']) && $_POST['degree']=="Bsc"){ echo "checked";} ?>>Bsc<br>
<input type="radio"name="degree" value="Msc" <?php if(isset($_POST['degree']) && $_POST['degree']=="Msc"){ echo "checked";} ?>>Msc<br>
  <hr>
  <input type = "submit" name = "submit" value="submit"><br>
</form>   
</body>   
</html>