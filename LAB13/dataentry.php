<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the input data
$info = htmlspecialchars($_POST["info"]);
// Display the information
echo "<p style='font-size: 20px;'>You entered:
<strong>$info</strong></p>";
// File to store the data
$file = "dataentry.txt";
// Append the information to the file
file_put_contents($file, $info . PHP_EOL,
FILE_APPEND);
// Confirmation message
echo "<p style='font-size: 18px; color:
green;'>Information saved successfully to
<strong>dataentry.txt</strong>.</p>";
}
?>