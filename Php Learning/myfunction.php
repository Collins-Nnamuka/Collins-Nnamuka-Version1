<?php
myfunction.php

function SignUp($firstname, $lastname, $username, $pwd, $cpwd){
    $fullname = $firstname. ' ' .$lastname;
    $hashedpassword = md5($pwd);

    $query = "INSERT INTO cp_users(fullname, username, password) ";
    $result = mysquli_query($dbconn, $query);
    if($result){
        echo "Succesfully Inserted";
    }else{
        echo "Could not insert record";
    }
}