<?php
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$validDOB=0;

	$monthArray31=array("january","march","may","july","august","october","december");
	$monthArray30=array("april","june","september","november");

	if($date=="" || $month=="" || $year==""){
		echo "Invalid date format";
	}
	else {
		foreach ($monthArray31 as $key) {
			if(strtolower($month)==$key && ($date>="1" && $date<="31") && ($year>="1953" && $year<="1998")){
				echo "Valid Date of Birth";
				$validDOB=1;
			}
		}
		foreach ($monthArray30 as $key) {
			if(strtolower($month)==$key && ($date>="1" && $date<="30") && ($year>="1953" && $year<="1998")){
				echo "Valid Date of Birth";
				$validDOB=1;
			}
		}
		if(strtolower($month)=="february")
		{
			if(($date>="1" && $date<="29") && ($year>="1953" && $year<="1998")){
				echo "Valid Date of Birth";
				$validDOB=1;
			}
		}

		if($validDOB==0){
			echo "Invalid Date of Birth";
		}
	}

?>