<?php

$connect = mysqli_connect("localhost", "root", "", "propertys");
    if (!$connect){
        echo "Failed to connect to Mysqli" . mysqli_connect_error();
        exit();
    }


if($_POST){
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $age = $_POST['age'];
    $flp = $_POST['flp'];
    $garden = $_POST['garden'];
    $parking = $_POST['parking'];
    $price = $_POST['price'];


    $sql_insert = "INSERT INTO properties (address, city, country, zip, age, floorPlan, garden, parking, price)
    VALUES ('$address', '$city', '$country', '$zip', '$age', '$flp', '$garden', '$parking', '$price')";
    if (mysqli_query($connect, $sql_insert)) {
        header('Location: avail.php');
        echo 'Property Successfully Added!';
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($connect);
      }
    }
?>