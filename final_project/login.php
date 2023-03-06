<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div class="header">
            <a href="index.php" class="logo">PropertyHub</a>
            <div class="header-right">
              <a href="index.php">Home</a>
              <a href="sell.php">Sell</a>
              <a href="avail.php">Avaliability</a>
            <?php
            session_start();
            if(array_key_exists("customerId", $_SESSION)){
                $_SESSION["customerId"] = 0;
                echo "<a active href='login.php'>Login/Register</a>";
            }
            ?>
            </div>
        </div>

        <br>

        <div>
            <form action = "logic/login_submit.php" method = "post">
                <label for = "userName">User Name:</label>
                <input type = "text" id = "userName" name = "userName" required>
                <br>
                <label for = "password" >Password:</label>
                <input type = "text" id = "password" name = "password" required>
                <br>
                <input type = "submit" name = "login" value = "Login">
            </form>
        </div>
        <div>
            New?
            <a href = register.php>
            <button type = "button">Register</button>
            </a>
        </div>
    </body>
</html>