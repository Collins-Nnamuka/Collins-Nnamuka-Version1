<?php
// Include the constants file

include('constant.php');

//create a function to connect to the database
function connectToDb(){
    
    // Initialize out connection object
    $mysqli = new mysqli (HOST_NAME, HOST_USERNAME, HOST_PASSWORD, DB_NAME)

    // Check if our connection was successful
    if(mysquli_connect_errno()){
        echo "Unable to connect to database ".mysquli_error($mysqli);
    }
    else{
        return $mysqli;
    }

    function disconnectDb($mysqli){
        $mysqli ->close();
    }
}

