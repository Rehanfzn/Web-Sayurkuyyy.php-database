<?php
  include "service/database.php";

  if(isset($_POST["register"])){
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "INSERT INTO users (username, password) VALUES
   ('$username','$password')";
  
    if($db->query($sql)) {
        echo "Data kamu terverivikasi";
    }else {
        echo "Data kamu tidak terverivikasi";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sayur.css" />
</head>
<body>
    <?php include "layout/header.html" ?> 

    <h3>DAFTAR AKUN</h3>
    <form method="POST" action="regrister.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
    </form>
     <?php include "layout/footer.html" ?> 
</body>
</html>