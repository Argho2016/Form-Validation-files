<?php

$username = $_POST['username'];
$password = $_POST['password'];
$valid=0;
$validPass=0;
$count=0;

if($username=="" || $password=="")
{
    echo "Username or Password can't be empty";
}

else{
    if(strlen($username) <2){
        echo "Name contains at least two characters"."<br/>";
    }
    else{
        for ($i=0; $i <strlen($username) ; $i++){
        if (ord($username[$i]) == 95 || ord($username[$i]) == 32 || 
        ord($username[$i]) == 46 || (ord($username[$i])>=65 && ord($username[$i])<=90) || (ord($username[$i])>=97 && ord($username[$i])<=122) || (ord($username[$i])>=48 && ord($username[$i])<=57)){
            $valid=1;   
        }
        else
            $valid=0;
        }
    }
    if(strlen($password)<8) {
        echo "Psssword Length at least 8 characters";
        $validPass=0;
    }
    else {
        for ($i=0; $i <strlen($password) ; $i++){
            if (ord($password[$i]) == 64 || ord($password[$i]) == 35 || 
            ord($password[$i]) == 36 || ord($password[$i]) == 37){
                $validPass=1;   
            }
            else
                $validPass=0;
            }
            if($validPass==0)
                echo "Password must contain one of the special Characters(@, #, $, %)";
    }

    if($valid==1 && $validPass==1){
        echo "You are Authorised";
    }
}
        
?>