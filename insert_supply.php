<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Supply Tracker - New Supply Entry</title>
</head>
<body>
    <h1>Campus Supply Tracker - New Supply Entry</h1>

    <?php
    //Validation block for the 'submitted supply'
    if (!isset($_POST['ProductID']) || !isset($_POST['ProductName'])
     || !isset($_POST['Category']) || !isset($_POST['Price'])) 
    {
    
        echo "<p>You have not entered all the required details.<br />
                Please go back and try again.</p>";
    
        exit;
    
    }   


    //Successful Validation, assign the form values into a PHP variables
    $productid = $_POST['ProductID'];
    $productname = $_POST['ProductName'];
    $category = $_POST['Category'];
    $price = $_POST['Price'];
    $price = doubleval($price);

    //Connecting the PHP file to MYSQL database 'campus_supplies'
    @$db = new mysqli('localhost', 'root', '', 'campus_supplies');

    if (mysqli_connect_errno()) {
        echo "<p>Error: Could not connect to database.<br/>
            Please try again later.</p>";
        exit;
    }

    //Inserting the input form values from a user to the table 'supplies'
    $query = "INSERT INTO Supplies VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssd', $productid, $productname, $category, $price);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p>Supply inserted into the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
            The item was not added.</p>";
    }

    $db->close();







    ?>
</body>
</html>