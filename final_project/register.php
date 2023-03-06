<!DOCTYPE html>
<html>
    <title>PropertyHub</title>
<head>
    <link rel="stylesheet" href="style.css" />

</head>
    <body>

        <div class="header">
            <a href="index.php" class="logo">VR Car Rental</a>
            <div class="header-right">
            <a href="#home">Home</a>
            <a href="sell.php">Sell</a>
            <a href="avail.php">Availability</a>
            <?php
                session_start();
                if(array_key_exists("customerId", $_SESSION)){
                    if($_SESSION["customerId"] == 0){
                        echo "<a href='login.php'>Login/Register</a>";
                    }
                    else{
                        echo "<a class='active' href = 'profile.php'>$_SESSION[firstName]</a>";
                    }
                }
                else{
                    echo "<a href='login.php'>Login/Register</a>";
                }
                ?>
            </div>
            </div>
            <br>
        <div>
        <h1>Register</h1>
            <form action = "register_submit.php" method = "post">
                <label for = "userName">User Name:</label>
                <input type = "text" id = "userName" name = "userName" required>
                <br>
                <label for = "userPassword" >Password:</label>
                <input type = "text" id = "password" name = "password" required>
                <br>
                <label for = "firstName" >First Name:</label>
                <input type = "text" id = "firstName" name = "firstName" required>
                <br>
                <label for = "lastName" >Last Name:</label>
                <input type = "text" id = "lastName" name = "lastName" required>
                <br>
                <label for = "email" >Email:</label>
                <input type = "text" id = "email" name = "email" required>
                <br>
                <label for = "address" >Address:</label>
                <input type = "text" id = "address" name = "address" required>
                <br>
                <label for = "city" >City:</label>
                <input type = "text" id = "city" name = "city" required>
                <br>
                <label for = "zip" >Zip:</label>
                <input type = "text" id = "zip" name = "zip" required>
                <br>
                <label for = "country" >Country:</label>
                <input type = "text" id = "country" name = "country" required>
                <br>
                <input type = "submit" name = "submit" value = "Register">
            </form>        
        
        </div>
    </body>
</html>