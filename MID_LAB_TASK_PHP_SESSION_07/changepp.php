






<html>
<head>
<title>PROFILE PICTURE</title>
</head>
<body>
<table border="1" width="100%" cellspacing="0">
<form method = "post" action ="">

<tr height="100px" >
     <td align="left" >
<img src="logo.png"></td>       
<td align="right">
logged in as<a href="profile.php"><?php print_r($_SESSION['user'])?> | </a>
<a href="login.html">log_out</a>
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
<legend>PROFILE PICTURE</legend>
<table>
  <input type="file" name="pp" id="pp">
</form>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</td>
</tr>
</table>
</fieldset>
<tr height="50px">
<td colspan="1" >
<td><center>Copyright &copy 2017</center></td>
</tr> 
</form>
</body>
</html>