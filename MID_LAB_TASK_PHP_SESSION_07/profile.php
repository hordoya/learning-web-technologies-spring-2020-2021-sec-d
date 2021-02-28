<?php
	session_start();
	if(isset($_SESSION['submit']))
	{
	}
?>

<html>
<head>
 <title>Name Input</title>
</head> 
<body>  
<table border="1" width="100%" cellspacing="0">

<tr height="100px">
     <td align="left">
<img src="logo.png"> </td>
      
<td align="right">
logged in <a href="profile.php"><?php print_r($_SESSION['user'])?> | </a>
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
<li><a href="login.html">log_out</a><br>
</ul>
</td>
<td>
				<h3>
						Name: <?php print_r($_SESSION['user']) ?><br>
						EMAIL: <?php print_r($_SESSION['email']) ?><br>
						GENDER: <?php print_r($_SESSION['gender']) ?><br>
						<a href="editprofile.php">Edit profile</a><br>
						
						
				</h3> 
			</td>
</tr>

<tr height="50px">
<td colspan="1" >
<td><center>Copyright &copy 2017</center></td>
</tr> 

 
</form>
</table>   
</body>   
</html>