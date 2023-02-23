

<?Php
//define variables and set empty values

$usernameErr = $emailErr = $passwordErr = $confirmpaswordErr = "";
$username = $email = $password = $Confirmpassword = "";


    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "Confirm Password is required";
  } else {
    $confirmpassword = test_input($_POST["confirm password"]);
  }

}

?>





