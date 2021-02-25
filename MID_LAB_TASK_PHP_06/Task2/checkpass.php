<?php

	if(isset($_POST['submit']))
	{
		if($_POST['np']==$_POST['cp'])
		{
			echo"New and previous password shouldnt be same";
		}
		else if($_POST['np']!=$_POST['rp'])
		{
			echo"New and retypr password should be same";
		}
		else{
			echo"Everything is fine";
		}
	}
?>
