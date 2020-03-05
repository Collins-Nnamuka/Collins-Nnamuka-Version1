<?php
//variables
$fname = "";
$lname = "";
$username = "";
$password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $username = test_input($_POST["username"]);
  $passwordt = test_input($_POST["password"]);

}

function test_input($inputs) {
  $inputs= trim($inputs);
  $inputs = stripslashes($inputs);
  $inputs = htmlspecialchars($inputs);
  return $inputs;
}
?>

<h2>FILL THE FORM BELOW</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  first name: <input type="text" name="fname">
  <br><br>

  last name: <input type="text" name="lname">
  <br><br>

  username: <input type="text" name="password">
  <br><br>

  password: <input type="password" name="password">
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $username;
echo "<br>"
?>
