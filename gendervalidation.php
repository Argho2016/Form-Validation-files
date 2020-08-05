<?php
	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
		
		if($gender=="")
		{
			echo "You must select one";
		}
		else
			echo "$gender";
	}
	else
	{
		echo "You must select one";
	}
	
?>