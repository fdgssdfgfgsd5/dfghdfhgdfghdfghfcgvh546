<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Check if the 'content' parameter is present in the POST request
    if (isset($_POST['content'])) {

        // Get the content from the POST request
        $newContent = $_POST['content'];

        // File path to the text file
        $filePath = 'example.txt';

        // Open the file for writing
        $file = fopen($filePath, 'w');

        // Write the new content to the file
        fwrite($file, $newContent);

        // Close the file
        fclose($file);

        // Respond with a success message
        echo 'Content updated successfully!';
    } else {
        // Respond with an error message if 'content' parameter is not present
        http_response_code(400);
        echo 'Error: Content parameter is missing in the POST request.';
    }
} else {
    // Respond with an error message if the request method is not POST
    http_response_code(405);
    echo 'Error: Only POST requests are allowed.';
}
?>
