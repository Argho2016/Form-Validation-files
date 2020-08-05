<?php
		$blood=$_POST['blood_group'];
	
		if($blood=="null")
		{
			echo "You must select one Blood Group";
		}
		else
			echo "Blood Group : ".$blood;

?>