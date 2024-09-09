<?php
include '../WoodcraftifyDatabase.php';

// Create an instance of the WoodcraftifyDatabase class
$db = generateDBObject();

// Ensure that the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the uploaded file
        $image = $_FILES['image'];
        $name = $_POST['name'];

        // Define the target directory and file name
        $targetDir = '../../images/products/';
        $fileName = $name; // Prefix filename if desired
        $targetFile = $targetDir . $fileName;

        // Upload the file using the uploadFile method
        if ($db->uploadFile($image, $targetDir, $fileName)) {
            // Return a success response
            echo json_encode(['success' => true]);
        } else {
            // Return a failure response
            echo json_encode(['success' => false, 'error' => 'Failed to move uploaded file.']);
        }
} else {
    // Return an error response for invalid request method
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>

