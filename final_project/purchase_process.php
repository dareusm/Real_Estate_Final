<?php
    $connect = mysqli_connect("localhost", "root", "", "propertys");
    if (!$connect){
        echo "Failed to connect to Mysqli" . mysqli_connect_error();
        exit();
    }

    if(isset($_POST['submit'])){
        $propertyId = $_POST['propertyId'];

        $sql_delete = "DELETE FROM properties WHERE propertyId='$propertyId'";

        if(mysqli_query($connect, $sql_delete)){
            header('location: http://localhost/final_project/avail.php');
            echo 'Purchase Successful! Enjoy your new Property!';
            
        }else{
            header('location: http://localhost/final_project/avail.php');
            echo 'Something went wrong! Try again!';
            
        }
    }

?>