<?php
function searchWordInFile($file_path, $search_word) {
    if (!file_exists($file_path)) {
        echo "File not found.";
        return;
    }
    $lines = file($file_path);
    foreach ($lines as $line_number => $line) {
        if (strpos($line, $search_word) !== false) {
            echo "Word '$search_word' found on line " . ($line_number + 1) . ": $line \n";
        }
    }
}

echo "Enter the word to search: ";
$search_word = trim(fgets(STDIN));

searchWordInFile('example.txt', $search_word);
?>
