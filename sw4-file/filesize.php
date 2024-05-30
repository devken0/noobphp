<?php
$file_path = 'example.txt';

if (file_exists($file_path)) {
    $file_size = filesize($file_path);
    echo "The file size of $file_path is " . formatFileSize($file_size, 'KB') . "\n";
} else {
    echo "File not found.";
}

// Function to format file size
function formatFileSize($size, $format) {
    switch ($format) {
        case 'KB':
            return round($size / 1024, 2) . ' KB';
        case 'MB':
            return round($size / (1024 * 1024), 2) . ' MB';
        case 'GB':
            return round($size / (1024 * 1024 * 1024), 2) . ' GB';
        default:
            return $size . ' bytes';
    }
}
?>