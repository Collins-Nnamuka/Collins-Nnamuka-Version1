<form method="POST" action="form.php">

    <lable> First Name: </lable>
    <input type="text" name="fname" />
    </br>
    <lable> Last Name: </lable>
    <input type="text" name="lname" />
    </br>
    <lable> Username: </lable>
    <input type="text" name="Username" />
    </br>
    <lable> password: </lable>
    <input type="text" name="Password" />
    </br>
    <lable> confirm pass: </lable> 
    <input type="text" name="confirmpass"> 
    <input type="SUBMIT" />

</form>


<?php

include("functionsDB.php");
if(isset($_POST['fname']) && isset($_POST['lname'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['username'];
    $Password = $_POST['password'];
    $confirmpass = $_POST['confirm'];

    SignUp($firstname, $lastname, $username, $Password);
}

    
?>