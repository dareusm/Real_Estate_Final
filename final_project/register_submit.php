<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <?php
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $fisrtName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            $license = $_POST["license"];
            $SSN = $_POST["ssn"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $zip = $_POST["zip"];
            $country = $_POST["country"];

            $connect = mysqli_connect("localhost", "root", "", "propertys");
            if (!$connect){
                echo "Failed to connect to Mysqli" . mysqli_connect_error();
                exit();
            }

            $query = "INSERT INTO customers(firstName, lastName, email, address, city, zip, country)
                        values('$fisrtName', '$lastName', '$email', '$address', '$city', '$zip', '$country')";
            $query_login = "INSERT INTO users(userName, userPassword)
                        values('$userName', '$password')";
            mysqli_query($connect, $query);
            mysqli_query($connect, $query_login);
            mysqli_close($connect);

            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['userName'];

        ?>
    </head>
    <body>
        <div class="header">
            <a href="index.php" class="logo">VR Car Rental</a>
            <div class="header-right">
            <a href="index.php">Home</a>
            <a href="bookNow.php">Book Now</a>
            <a href="avail.php">Availability</a>
            <a active href = "login.php">Sign Out</a>
            </div>
        </div>

        <br>

        <div>
            <h1>
                You are registered
            </h1>
        </div>
    </body>
</html>