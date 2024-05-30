<?php

// Function to calculate electricity bill
function calculateElectricityBill($units) {
    $totalBill = 0;

    // Condition a
    if ($units <= 50) {
        $totalBill = $units * 3.50;
    }
    // Condition b
    elseif ($units > 50 && $units <= 100) {
        $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
    }
    // Condition c
    elseif ($units > 100 && $units <= 150) {
        $totalBill = (50 * 3.50) + (50 * 4.00) + (($units - 100) * 5.20);
    }
    // Condition d
    elseif ($units > 150 && $units <= 250) {
        $totalBill = (50 * 3.50) + (50 * 4.00) + (50 * 5.20) + (($units - 150) * 6.50);
    }
    // Beyond 250 units
    else {
        $totalBill = (50 * 3.50) + (50 * 4.00) + (50 * 5.20) + (100 * 6.50) + (($units - 250) * 6.50);
    }

    return $totalBill;
}

// Take user input for units consumed
if(isset($_POST['submit'])){
    $unitsConsumed = $_POST['units'];
    $billAmount = calculateElectricityBill($unitsConsumed);
    echo "Electricity bill for $unitsConsumed units: <b>Rs. $billAmount</b>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h2>Electricity Bill Calculator</h2>
    <form method="post" action="">
        <label for="units">Enter units consumed:</label>
        <input type="text" id="units" name="units" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>
