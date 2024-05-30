<?php
$file_path = 'contacts.csv';

if (($csv = fopen($file_path, "r")) !== false) {
    echo "<table border='1'>";
    while (($data = fgetcsv($csv)) !== false) {
        echo "<tr>";
        foreach ($data as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($csv);
} else {
    echo "Failed to open file.";
}
?>
