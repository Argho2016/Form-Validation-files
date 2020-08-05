<?php

    $name = $_POST['name'];
    $validName=0;
    $email = $_POST['email'];
    $count=0;
    $countLetter=0;
    $countLetter2=0;
    $validEmail=1;
    $countDot=0;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['Confirmpassword'];
    $validUsername=0;
    $validPass=0;
    $count=0;

    if($name=="")
    {
        echo "Name can't be empty"."<br/>";
    }

    else{

        if(ord($name[0]) <= 57){
            echo "Name Must start with letter"."<br/>";
        }
        elseif(str_word_count($name) <2){
            echo "Name contains at least two words"."<br/>";
        }
        else{
            for ($i=0; $i <strlen($name) ; $i++){
            if (ord($name[$i]) == 95 || ord($name[$i]) == 32 || ord($name[$i]) == 46 || (ord($name[$i])>=65 && ord($name[$i])<=90) || (ord($name[$i])>=97 && ord($name[$i])<=122))
            {
                $validName=1;   
            }
            else
                $validName=0;
            }
            }
        }

        /*if($validName==1){
            echo "You are Authorised";
        }
        else
            echo "Invalid name";
        }*/


        //Email
        if($email=="")
        {
            echo "Email can't be empty"."<br/>";
        }

        else{
            for ($i=0; $i < strlen($email) ; $i++) { 
        
                if(ord($email[$i])==64){
                    if($i<1){
                        echo "Invalid Email g"."<br/>";
                        $validEmail=0;
                        break;
                    }
                    else{
                        for ($j=$i; $j<strlen($email) ; $j++) {
                            if(ord($email[$j])==46){
                                    $countDot++;
                                for ($k=$j-1; $k>$i ; $k--) 
                                {
                                    $countLetter++;
                                }
                                for ($k=$j+1; $k<strlen($email) ; $k++) 
                                {
                                    $countLetter2++;
                                }
                        }
                        }   
                        if($countLetter<1 || $countDot>1 || $countLetter2<1){
                            $validUsername=0;}
                    }
                }
                
                elseif(ord($email[$i])==46){
                    for ($j=0; $j < strlen($email) ; $j++) { 
                        if(ord($email[$j])==64){
                            $count=1;  
                        }
                    }
                    //echo $count;
                    if($count!=1){
                        echo "Invalid Email e"."<br/>";
                        $count=0;
                        $validEmail=0;
                    }
                }  
            }
            }
            for ($i=0; $i <strlen($email) ; $i++) { 
                if(ord($email[$i])==64 || ord($email[$i])==46){
                    $count++;
                }
            }
            if($count==0 && $validUsername==1){
                echo "Invalid Email d"."<br/>";
                $validEmail=0;}
            

            /*if ($validEmail==1 && $count>1 && $countDot==1) {
                echo "validUsername Email";
            }
            else
                echo "Invalid Email";*/
            
            //Uername & Password
            if($username=="" || $password=="")
            {
                echo "Username or Password can't be empty"."<br/>";
            }

            else{
                if(strlen($username) <2){
                    echo "Name contains at least two characters"."<br/>";
                }
                else{
                    for ($i=0; $i <strlen($username) ; $i++){
                    if (ord($username[$i]) == 95 || ord($username[$i]) == 32 || 
                    ord($username[$i]) == 46 || (ord($username[$i])>=65 && ord($username[$i])<=90) || (ord($username[$i])>=97 && ord($username[$i])<=122) || (ord($username[$i])>=48 && ord($username[$i])<=57)){
                        $validUsername=1;   
                    }
                    else
                        $validUsername=0;
                    }
                }
                if(strlen($password)<8) {
                    echo "Psssword Length at least 8 characters"."<br/>";
                    $validPass=0;
                }
                else {
                    for ($i=0; $i <strlen($password) ; $i++){
                        if (ord($password[$i]) == 64 || ord($password[$i]) == 35 || 
                        ord($password[$i]) == 36 || ord($password[$i]) == 37){
                            $validPass=1;
                            break; 
                        }
                        else
                            $validPass=0;
                        }
                        if($validPass==0)
                            echo "Password must contain one of the special Characters(@, #, $, %)"."<br/>";
                }

                if($password!=$confirmPass){
                    $validPass=0;
                    echo "Passwords didn't Match with previous password"."<br/>";
                    }

                /*if($validUsername==1 && $validPass==1){
                    echo "You are Authorised"."<br/>";
                }*/
            }

            //Gender
            if(isset($_POST['gender'])){
                $gender = $_POST['gender'];
                
                if($gender=="")
                {
                    echo "You must select one"."<br/>";
                }
                /*else
                    echo "$gender"."<br/>";*/
            }
            else
            {
                echo "You must select one Gender"."<br/>";
            }
        
            //echo $_POST['date'];
            //DOB
                
                $date = $_POST['date'];
                $month = $_POST['month'];
                $year = $_POST['year'];
                $validDOB=0;
                
                $monthArray31=array("january","march","may","july","august","october","december");
                $monthArray30=array("april","june","september","november");
            
                if($date=="" || $month=="" || $year==""){
                    echo "Invalid date format"."<br/>";
                }
                else {
                    foreach ($monthArray31 as $key) {
                        if(strtolower($month)==$key && ($date>="1" && $date<="31") && ($year>="1953" && $year<="1998")){
                            //echo "Valid Date of Birth"."<br/>";
                            $validDOB=1;
                        }
                    }
                    foreach ($monthArray30 as $key) {
                        if(strtolower($month)==$key && ($date>="1" && $date<="30") && ($year>="1953" && $year<="1998")){
                            //echo "Valid Date of Birth"."<br/>";
                            $validDOB=1;
                        }
                    }
                    if(strtolower($month)=="february")
                    {
                        if(($date>="1" && $date<="29") && ($year>="1953" && $year<="1998")){
                            //echo "Valid Date of Birth"."<br/>";
                            $validDOB=1;
                        }
                    }
            
                    if($validDOB==0){
                        echo "Invalid Date of Birth"."<br/>";
                    }
                }

            if($validDOB==1 && $validEmail==1 && $validName==1 && $validPass==1 && $validUsername==1){
                echo "<b>Registration Successful</b><br/><br/>";

                echo "Your Informations : <br/><br/>"."<b>Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$name."<br/><b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$email."<br/><b>Username</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$username."<br/><b>Gender</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$gender."<br/><b>Date of Birth</b>&nbsp;&nbsp;: ".$date." ".$month." ".$year;
            }
        
?>