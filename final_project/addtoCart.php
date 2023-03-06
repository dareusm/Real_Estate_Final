<!DOCTYPE html>
<html>
    <title>VR CarRental</title>
<head>
    <link rel="stylesheet" href="style.css" />

</head>
<body>

    <div class="header">
        <a href="index.php" class="logo">VR Car Rental</a>
        <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a href="bookNow.php">Buy</a>
        <a href="sell.php">Sell</a>
        <a href="avail.php">Availability</a>
        <?php
            session_start();
            if(array_key_exists("customerId", $_SESSION)){
                if($_SESSION["customerId"] == 0){
                    echo "<a href='login.php'>Login/Register</a>";
                }
                else{
                    echo "<a href = 'profile.php'>$_SESSION[firstName]</a>";
                }
            }
            else{
                echo "<a href='login.php'>Login/Register</a>";
            }
            ?>
        </div>
    </div>
    <?php
        if(array_key_exists("customerId", $_SESSION)){
            if($_SESSION["customerId"] == 0){
                echo "<h1>You are not logged in</h1>";
            }
            else{
                echo "<h1>Added to cart</h1>";
            }
        }
        else{
            echo "<h1>You are not logged in</h1>";
        }


    ?>

</body>
</html>