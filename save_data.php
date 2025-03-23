<?php
// Ensure the directory exists
$directory = "data/"; 
if (!file_exists($directory)) {
    mkdir($directory, 0777, true); // Create the directory if it doesn't exist
}

// Get the filename and file data from the POST request
$filename = $directory . $_POST['filename'];
$data = $_POST['filedata'];

// Save the data to the file
if (file_put_contents($filename, $data)) {
    // Redirect to Qualtrics with the file link as a URL parameter
    $qualtricsURL = "https://yourqualtricssurvey.qualtrics.com/jfe/form/SV_cwOMB3KwR2WUpKe?file_link=" . urlencode($filename);
    echo $filename; // Return the file name so it can be used in the Qualtrics URL
} else {
    echo "Error saving file.";
}
?>
