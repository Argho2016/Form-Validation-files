<?php

    $current = $_POST['password'];
    $new = $_POST['newPassword'];
    $retype = $_POST['retypePassword'];

    if($current=="" || $new=="" || $retype==""){
        echo "Fillup all the information to change your Password";
    }   
    elseif ((strlen($current)<8 || strlen($new)<8 || strlen($retype)<8)) {
        echo "Password must have at least 8 characters";
    }  
    else
    {
        if($current==$new)
            echo "New Password can't match with Current Password";
        elseif($new!=$retype)
            echo "New Password and Retyped Password didn't Match";
        else
            echo "You successfylly changed your password";
    }
?>