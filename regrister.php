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
    <link rel="stylesheet" href="style/register.css" />
</head>
<body>
    <?php include "layout/header.html" ?> 

    <div class="container">
    <h3>Daftar akun</h3>
        <form action="login.php" method="POST">
            <div>
                <label for="username">Username</label>
                <input type="text" placeholder="username" name="username"/>
            </div>
        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password"/>
        </div>
        <button type="submit" name="login"> Masuk sekarang </button>
    </form>
    </div>
    
     <?php include "layout/footer.html" ?> 
</body>
</html>