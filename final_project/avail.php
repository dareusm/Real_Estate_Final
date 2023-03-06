<!DOCTYPE html>
<html>
    <head>
        <title> Properties Available </title>
        <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        }
        th {
        background-color: #588c7e;
        color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
        </style>
        <link rel="stylesheet" href="style.css" />

    </head>
    <body>
    <div class="header">
        <a href="index.php" class="logo">PropertyHub</a>
        <div class="header-right">
          <a  href="index.php">Home</a>
          <a href="sell.php">Sell</a>
          <a class="active href= avail.php">Availability</a>
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
        <table>
            <th>ID</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Zip</th>
            <th>Age</th>
            <th>Floorplan</th>
            <th>Garden</th>
            <th>Parking</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "propertys");
            // Check connection

            if (!$conn) {
                echo "Died";
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM properties";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {

            // output data of each row

                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td> $row[propertyId] </td>
                            <td> $row[address] </td>
                            <td> $row[city] </td>
                            <td> $row[country] </td>
                            <td> $row[zip] </td>
                            <td> $row[age] </td>
                            <td> $row[floorPlan] </td>
                            <td> $row[garden] </td>
                            <td> $row[parking] </td>
                        </tr>";
                }
                echo "</table>";
            } 
            else { echo "0 results"; }
            mysqli_close($conn);
            ?>
        </table>
            <br/><br/>
        <h2>Interested in purchasing property?<a href='purchase.php'> Click here!</a></h2>
        <h2>Interested in listing property?<a href='sell.php'> Click here!</a></h2>
        
    </body>
</html>