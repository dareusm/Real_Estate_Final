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
      <a class="active" href="#home">Home</a>
      <a href="sell.php">Sell</a>
      <a href="avail.php">Availability</a>
      <?php
        session_start();
        if(array_key_exists("customer_id", $_SESSION)){
            if($_SESSION["customer_id"] == 0){
                echo "<a href='login.php'>Login/Register</a>";
            }
            else{
                echo "<a href = 'profile.php'>$_SESSION[first_name]</a>";
            }
        }
        else{
            echo "<a href='login.php'>Login/Register</a>";
        }
        ?>
    </div>
</div>

<!--<section class="tiles">
    <article class="style1">
        <span class="image">
            <img src="nissangtr.jpeg" alt="" />
        </span>
        <a href="#footer" class="scrolly">
            <h2>Nissan GTR R34 </h2>
            
            <p>price from: <strong> $ 350.00</strong> per day</p>

        </a>
    </article>

    <article class="style2">
        <span class="image">
            <img src="supraupdate.jpeg" alt="" />
        </span>
        <a href="#footer" class="scrolly">
            <h2>Toyota Supra MK4</h2>
            
            <p>price from: <strong> $ 375.00</strong> per day</p>

            
        </a>
    </article>

</section>-->
  
<div style="padding-left:20px">
    <center><img src='images/real_estate.jpg' style='width:800px; height:500px'></img></center>
    <p style='font-size:20px'>
    “Here at PropertyHub our mission is to provide the consumer with the highest level of service of any Real Estate company thereby ensuring that properties are sold or leased in an exemplary manner. We endeavor to deliver professional service to clients and customers so that transactions are completed to the satisfaction of all concerned.”</p>
    <p style='font-size:20px'>-Dareus Morris<br/>CEO of Property Hub</p>
    
</div>



</body>
</html>