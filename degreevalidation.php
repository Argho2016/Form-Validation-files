<?php
	if(isset($_POST['check_list'])){
		$degree=count($_POST['check_list']);
	
		if($degree >= 2)
		{
			foreach($_POST['check_list'] as $selected)
			{
				echo $selected."</br>";
			}
		}
		else
			echo "You have to select at least two";
	}
	else
	{
		echo "You have to select at least two";
	}

?>