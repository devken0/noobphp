<?php
# Counter Loop
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}

echo "<br>";

# Pattern Loop 1
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

# Pattern Loop 2
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

# Factorial Loop
$number = 4;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "Factorial of $number is: $factorial";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Seatwork 2 - Loops</title>
</head> 
</html>