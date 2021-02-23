<?php
if(isset($_POST['submit'])){
echo $_POST['degree'];
}

?>

<html>
<head>
 <title>Degree</title>
</head> 
<body>  
<form method = "post" action ="">      
<fieldset>
<legend>Degree</legend>      
<input type="radio"name="degree" value="ssc" >ssc<br>
<input type="radio"name="degree" value="hsc" >hsc<br>

<input type="radio"name="degree" value="Bsc" >Bsc<br>
<input type="radio"name="degree" value="Msc" >Msc<br>
  <hr>
  <input type = "submit" name = "submit" value="submit"><br>
</form>   
</body>   
</html>