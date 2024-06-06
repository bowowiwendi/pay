<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nohp = $_POST["nohp"];
   

    $user_file = "user.txt";

    // Format data pengguna yang akan disimpan
    $user_data = "$username,$password,$nohp" . PHP_EOL;

    // Menyimpan data pengguna ke file user.txt
    file_put_contents($user_file, $user_data, FILE_APPEND | LOCK_EX);

    // Redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Sign Up Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="full_name" required>
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="nohp" name="nohp" required>
          <span></span>
          <label>No Handphone</label>
        </div>
        <input type="submit" value="Sign Up">
        <div class="signup_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
  </body>
</html>
