<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$number = intval($_POST["number"]);
function isPrime($num) {
if ($num <= 1) return false;
for ($i = 2; $i <= sqrt($num); $i++) {
if ($num % $i == 0) return false;
}
return true;
}
if (isPrime($number)) {
echo "<p style='font-size: 24px; color:
green;'>$number is a Prime Number.</p>";
} else {
echo "<p style='font-size: 24px; color:
red;'>$number is not a Prime Number.</p>";
}
}
?>
