<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <!-- This is the menu with its prices, arranged on the tables-->
    <h1>Menu</h1>
    <table style="width:30%">
    <tr>
        <th>Order</th>
        <th>Amount</th> 
    </tr>
    <tr>
        <td>Burger</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Fries</td>
        <td>75</td>
    </tr>
    <tr>
        <td>Steak</td>
        <td>150</td>
    </tr>
    </table>

    <br>
    
    <!-- This is where the user's input will be collected through a form that uses the 'GET' method to retrieve data. The form includes 'text' and 'select' input types-->
    <form action="get.php" method = "GET">
    <label for = "food">Choose your order:</label>
      <select name = "food" id = "food">
        <option value = "burger">Burger</option>
        <option value = "fries">Fries</option>
        <option value = "steak">Steak</option>
      </select>
      <p>Quantity:
          <input type="text" name="quantity" size="30" maxlength="30"/>
      </p>
      <p>Cash:
          <input type="text" name="cash" size="30" maxlength="30"/>
      </p>
      <label>
          <input type="submit" value = "Submit" name = "submitName"/>
      </label> 
</body>
</html>