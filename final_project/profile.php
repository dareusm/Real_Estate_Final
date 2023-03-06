<!DOCTYPE html>
<html>
    <title>PropertyHub</title>
<head>
    <link rel="stylesheet" href="style.css" />
    <?php session_start();?>
    <style>
        tr{
            text-align:left;
            margin-bottom:50px;
        }
    </style>
</head>
    <body>
        <div class="header">
            <a href="index.php" class="logo">PropertyHub</a>
            <div class="header-right">
            <a href="index.php">Home</a>
            <a href="sell.php">Sell</a>
            <a href="avail.php">Availability</a>
            <a active href = "login.php">Sign Out</a>
        </div>
        </div>

        <br>
        <div>
                <h1>Profile</h1>
                <table>
                    <tr>
                        <th>Customer Id:</th>
                        <td>
                        <?=$_SESSION['user_info']['customerId'];?>
                        </td>
                    </tr>
                    <tr>
                        <th>User Name:</th>
                        <td>
                        <?=$_SESSION['user_info']['userName'];?>
                        </td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td>
                        <?=$_SESSION['user_info']['userPassword'];?>
                        </td>
                    </tr>
                    <tr>
                        <th>First Name:</th>
                        <td>
                        <?=$_SESSION['user_info']['firstName'];?>
                        </td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>
                        <?=$_SESSION['user_info']['lastName'];?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>
                        <?=$_SESSION['user_info']['email'];?>
                        </td>
                    </tr>
                </table>
            </div>
    </body>
</html>