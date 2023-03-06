<!DOCTYPE html>
<html>
    <title>PropertyHub</title>

<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="header">
        <a href="index.php" class="logo">PropertyHub</a>
        <div class="header-right">
          <a  href="index.php">Home</a>
          <a class="active" href="sell.php">Sell</a>
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

    <section class="tiles">
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "propertys");
                    // Check connection
        
                    if (!$conn) {
                        echo "Died";
                    die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM properties
                            join property_price
                            on property_price.propertyId = properties.propertyId";
                    $result = mysqli_query($conn, $sql);
        
                    
                    mysqli_close($conn);
            ?>
    </section>

    <table>
            <form action='sell_process.php' method='POST'>
                <tr>
                    <th>Street Address</th>
                    <td><input type='text' placeholder='Street Address' name='address'></td>
                </tr>
                <tr>
                    <th>City and State</th>
                    <td><input type='text' placeholder='City, State' name='city'></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><input type='text' placeholder='Country' name='country'></td>
                </tr>
                
                <tr>
                    <th>Zip</th>
                    <td><input type='text' placeholder='Zip Code' name='zip'></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><input type='text' placeholder='Age' name='age'></td>
                </tr>
                <tr>
                    <th>Floor Plan and SqFt</th>
                    <td><input type='text' placeholder='Bed, Bath, and SqFt' name='flp'></td>
                </tr>
                <tr>
                    <th>Does it have a garden?</th>
                    <td><input type='text' placeholder='Yes or No' name='garden'></td>
                </tr>
                
                <tr>
                    <th>Does it come with parking?</th>
                    <td><input type='text' placeholder='Yes or No' name='parking'></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input type='text' placeholder='Price' name='price'></td>
                </tr>
                <tr>
                    <td><button type='submit' name='submit'>List</button></td>
                </tr>
            </form>
        </table>




</body>
</html>