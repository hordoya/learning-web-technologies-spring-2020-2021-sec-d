<?php
session_start();
	if(isset($_POST['submit']))
	{
				if($_SESSION['user']!=$_POST['name'] || $_SESSION['password']!=$_POST['password'])
				{
					echo"not valid";
				}
				else{
					echo"Valid";
				header('location: profile.php');
				}
	}
?>





