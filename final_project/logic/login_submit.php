<?php
    session_start();
    $_SESSION["customerId"] = 0;
    $_SESSION["firstName"] = "";


    //connecting to the DB
    $connect = mysqli_connect("localhost", "root", "", "propertys");
    if (!$connect){
        echo "Failed to connect to Mysqli" . mysqli_connect_error();
        exit();
    }

    //posting the values from the form
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    //running functions either login or register
    if(isset($_POST['login'])){
        login($connect, $userName, $password);
    }
    
    function login($connect, $userName, $password){

        $query = "SELECT *
                FROM users
                join customer
                on customer.customerId = users.customerId
                WHERE userName = '$userName' AND userPassword = '$password'";
        $result = mysqli_query($connect, $query);       
        $num_rows = mysqli_num_rows($result);

        if($num_rows != 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_info"] = $row;
            $_SESSION["customerId"] = $row["customerId"];
            $_SESSION["firstName"] = $row["firstName"];
            header("Location:../index.php");
        }
        else{
            echo "Login failed";
            echo "<br><a href = login.php>Try again</a>";
        }
    }
    mysqli_close($connect);
?>