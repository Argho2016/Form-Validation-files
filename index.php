<?php
    $name = "he5llo";
    for ($i=0; $i <strlen($name) ; $i++){
    if(ord($name[$i]) <= 57){
        echo "error";
    break;}
    else
        echo "valid";
    }
    
?>
