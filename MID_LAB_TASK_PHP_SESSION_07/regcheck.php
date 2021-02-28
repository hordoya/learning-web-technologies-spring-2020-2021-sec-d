<?php
session_start();
	if(isset($_POST['submit']))
	{
		
		$username 	= $_POST['name'];
		$email 		= $_POST['email'];
		$gender 		= $_POST['gender'];
		$password 	= $_POST['password'];
		$cp 	= $_POST['cp'];
		
		
		
		$user = [
							'name'		=>$name, 
							'email'	=>$email, 
							'gender'		=>$gender, 
							'password'	=>$password,
							'cp'=>$cp
						];
				$_SESSION['user']=$username;
				$_SESSION['password']=$password;
				$_SESSION['email']=$email;
				$_SESSION['gender']=$gender;
				header('location: login.html');
	}
?>







