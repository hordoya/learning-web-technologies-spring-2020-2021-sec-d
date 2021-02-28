<?php
session_start();
	if(isset($_POST['submit']))
	{
		$_SESSION['user']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['gender']=$_POST['gender'];
				header('location: profile.php');
	}
?>














<html>
<head>
<title>Edit Profile</title>
</head>
<body>
<table border="1" width="100%" cellspacing="0">
<form method = "post" action ="">

<tr height="100px" >
     <td align="left" >
<img src="logo.png"></td>       
<td align="right">
<a href="home.html">Home | </a>
<a href="login.html">login | </a>
<a href="rwg.html">Registration</a>
</td>
</tr>






<tr height="200px">
<td width="33%" >
<li>Account</li>
<hr width="90%">
<ul>
<li><a href="dash.php">Dash </a><br>
<li><a href="profile.php">View Profile</a><br>
<li><a href="editprofile.php">Edit Profile </a><br>
<li><a href="changepp.php">Change Profile picture </a><br>
<li><a href="changepass.php">change password</a><br>
<li><a href="login.html">log_out</a>
<br>
</ul>
</td>

<td colspan="2" align="center">
<form method = "post" action ="">
<fieldset style= width:25%>
<legend>Edit Profile</legend> 
<table>
<tr> 
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>

<tr> 
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>



<tr><td>
<fieldset>
<legend>Gender</legend>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  </td>
</tr>
</fieldset>


<tr><td>
<fieldset>
<legend>Birthday</legend>
<label for="birthday">Birthday: </label>
<input type="date" id="birthday" name="birthday">
  </td>
</tr>
</fieldset>


<hr>

<td><input type="submit" name="submit" value="submit"></td>
</td>
</table>
</fieldset>
<tr height="100px">
<td colspan="2"><center>Copyright &copy 2017</center></td>

</form>
</body>
</html>