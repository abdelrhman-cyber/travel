<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   function Validate($data='')
   {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
// Retrieve the form data
$username = Validate($_POST['username']);
$password = Validate($_POST['password']);

if (empty($username)) {
  header('Location: home.html?error=username is required');
  exit;
}elseif (empty($password)) {
  header('Location: home.html?error=password is required');
  exit;
}else {
  echo "valid input";

}
// TODO: Validate the form data and check if the user's credentials are correct

// If the user's credentials are correct, redirect them to the home page
header('Location: home.html');
exit;
}
 ?>
