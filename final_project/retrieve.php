<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM Cars");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>propertyId</td>
    <td>address</td>
    <td>city</td>
    <td>country</td>
    <td>zip</td>
    <td>age</td>
    <td>floor plan</td>
    <td>garden</td>
    <td>parking</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["propertyId"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["country"]; ?></td>
    <td><?php echo $row["zip"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["floorPlan"]; ?></td>
    <td><?php echo $row["garden"]; ?></td>
    <td><?php echo $row["parking"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>