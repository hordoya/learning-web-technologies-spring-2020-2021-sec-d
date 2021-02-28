<?php
session_start();
	if(isset($_POST['submit']))
	{
		$_SESSION['password'];
				if($_POST['cp']!=$_SESSION['password'])
				{
					echo"current incorrect ";
				}
				else if($_POST['np']==$_SESSION['password'])
				{
					echo"new password and current password are same";
				}
				else if($_POST['np']!=$_POST['npp'])
				{
					echo"new password and retypr password are not same";
				}
				else{
					$_SESSION['password']=$_POST['np'];
				header('location: profile.php');
				}
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
<li><a href="login.html">log_out</a>
<br>
</ul>
</td>

<td colspan="2" align="center">
<form method = "post" action ="">
<fieldset style= width:25%>
<legend>Change Password</legend> 
<table>
<tr> 
<td>Current Password</td>
<td><input type="password" name="cp"></td>
</tr>

<tr> 
<td>New Password</td>
<td><input type="password" name="np"></td>
</tr>

<tr> 
<td>Retype New Password</td>
<td><input type="password" name="npp"></td>
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