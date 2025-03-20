<?php
$filename = "data/".$_POST['filename'];
$data = $_POST['filedata'];

if (file_put_contents($filename, $data)) {
    // Redirect to Qualtrics and send a link to the saved file
    $qualtricsURL = "https://yourqualtricssurvey.qualtrics.com/jfe/form/SV_cwOMB3KwR2WUpKe?file_link=" . urlencode($filename);
    header("Location: $qualtricsURL");
    exit();
} else {
    echo "Error saving file.";
}
?>
