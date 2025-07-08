<?php
   include "service/database.php";

    if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
    $result = $db->query($sql);

    if($result->num_rows > 0){
     echo "akun sudah terdaftar";
    }else{
     echo "akun tidak ditemukan"; 
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css" />
</head>
<body>
    <?php include "layout/header.html" ?> 

    <div class="container">
    <h3>Masuk akun</h3>
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