<html>
    <head>
    </head>
    
    <body>
        <center><h1>Select which property you would like to purchase!</h1></center>
        <table>
            <form action='purchase_process.php' method='POST'>
                <tr>
                    <th>Property ID</th>
                    <td><input type='text' placeholder='Enter Property ID' name='propertyId'></td>
                </tr>
                <tr>
                    <th>Name on Card</th>
                    <td><input type='text' placeholder='Name' name='card_name'></td>
                </tr>
                <tr>
                    <th>Card Number</th>
                    <td><input type='text' placeholder='Card Number' name='card_number'></td>
                </tr>
                <tr>
                    <th>Expiration Date</th>
                    <td><input type='text' placeholder='Expiration Date' name='exp'></td>
                </tr>
                
                <tr>
                    <th>CVV</th>
                    <td><input type='text' placeholder='cvv' name='cvv'></td>
                </tr>
                <tr>
            
                </tr>
                <tr>
                    <td><button type='submit' name='submit'>Purchase</button></td>
                </tr>
            </form>
        </table>
    </body>
</html>