<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["name"];
   $password = $_POST["password"];
   
   if ($username === "nour" && $password === "nour@123") {
      // Successful login, redirect to next page
      header("Location: dashboard.php");
      exit();
   } else {
      // Invalid login, redirect back to login page with error
      header("Location: index.php?error=1");
      exit();
   }
}
?>
