<?php
include('config.php');
session_start();
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email ' ";
$result = query($query);

if (session_destroy()) {
   if (row_count($result) == 1) {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $update = "UPDATE users SET token=null WHERE email='$email' ";
      $result2 = query($update);
   }
   redirect('login.php');
}
redirect('index.php');
