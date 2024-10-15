<?php
// Function to get images from a directory
function getImages($imageDir) {
    // Check if the directory exists
    if (is_dir($imageDir)) {
        $images = scandir($imageDir);
        // Filter out '.' and '..'
        return array_values(array_diff($images, array('.', '..')));
    } else {
        echo "<p style='color:red;'>Directory not found: $imageDir</p>";
        return []; // Return an empty array if the directory doesn't exist
    }
}

// Array of image directories
$imageDirs = array(
    'wrapcar' => __DIR__ . '/Saved Pictures/wrapcar',
    'weels' => __DIR__ . '/Saved Pictures/weels',
    'interior' => __DIR__ . '/Saved Pictures/interior_cusion',
    'exterior' => __DIR__ . '/Saved Pictures/exterior'
);

// Initialize an array to hold all images
$allImages = array();

// Loop through each directory and retrieve images
foreach ($imageDirs as $key => $dir) {
    $allImages[$key] = getImages($dir);
}

// Set header for JSON output
header('Content-Type: application/json');
echo json_encode($allImages);
?>
