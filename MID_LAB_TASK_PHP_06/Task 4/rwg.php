<html>
<head>
<title>REGISTRATION</title>
</head>
<body>
<form method="post" action= "logincheck.php" >
<fieldset>
<legend>REGISTRATION</legend>
<table>
<tr> 
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>

<tr> 
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>

<tr> 
<td>User Name</td>
<td><input type="text" name="un"></td>
</tr>


<tr> 
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>

<tr> 
<td>Confirm Password</td>
<td><input type="password" name="cp"></td>
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
<legend>Date of Birth</legend>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">
  </td>
</tr>
</fieldset>


<hr>

<td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="reset" value="reset"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>