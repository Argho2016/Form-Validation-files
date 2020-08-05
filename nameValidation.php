<?php

    $name = $_POST['name'];
    $valid=0;
    $count=0;

    if($name=="")
    {
        echo "Name can't be empty";
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
            if (ord($name[$i]) == 95 || ord($name[$i]) == 32 || 
            ord($name[$i]) == 46 || (ord($name[$i])>=65 && ord($name[$i])<=90) || (ord($username[$i])>=97 && ord($username[$i])<=122)){
                    $valid=1;   
                }
            else
                $valid=0;
            }
        }

        if($valid==1){
            echo "You are Authorised";
        }
        else
            echo "Invalid name";
}
        
?>