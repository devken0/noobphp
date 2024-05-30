<?php
// 1. Eligibility to Vote Program
function checkEligibility($age) {
    if ($age >= 18) {
        return "You are eligible to vote!";
    } else {
        return "You are not eligible to vote yet.";
    }
}

echo "1. Eligibility to Vote Program\n";
$age = readline("Enter your age: ");
echo checkEligibility($age) . "\n\n";

// 2. Subset of Array Program
function isSubset($arr1, $arr2) {
    return count(array_intersect($arr1, $arr2)) == count($arr2);
}

echo "2. Subset of Array Program\n";
$largerArray = explode(" ", readline("Enter values of the larger array separated by space: "));
$smallerArray = explode(" ", readline("Enter values of the smaller array separated by space: "));
if (isSubset($largerArray, $smallerArray)) {
    echo "The second array is a subset of the first array.\n\n";
} else {
    echo "The second array is not a subset of the first array.\n\n";
}

// 3. Factorial Program
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo "3. Factorial Program\n";
$number = readline("Enter a number to find its factorial: ");
echo "Factorial of $number is: " . factorial($number) . "\n\n";
?>



