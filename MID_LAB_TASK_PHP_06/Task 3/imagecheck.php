<?php

	if(isset($_POST['submit']))
	{
		$sup = array('jpg','jpeg','png');
		$ex = strtolower(pathinfo($_POST['pp'], PATHINFO_EXTENSION));
		if (in_array($ex, $sup) === false)
		{
			echo "submit in jpeg,jpg or png formet";
		}
		else if(getimagesize($_POST['pp'])>4)
		{
			echo "Submit in mentioned size";
		}
	}
?>
