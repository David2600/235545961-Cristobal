<?php
$a = 15;
$b = 7;

echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";
?>


<?php
$num = 10;

if ($num % 2 == 0) {
echo "$num is even";
} else {
echo "$num is odd";
}
?>


<?php
$num = -5;

if ($num > 0) {
echo "$num is positive";
} elseif ($num < 0) {
echo "$num is negative";
} else {
echo "$num is zero";
}
?>


<?php
for ($i = 1; $i <= 100; $i++) {
if ($i % 3 == 0 && $i % 5 == 0) {
echo "FizzBuzz<br>";
} elseif ($i % 3 == 0) {
echo "Fizz<br>";
} elseif ($i % 5 == 0) {
echo "Buzz<br>";
} else {
echo "$i<br>";
}
}
?>


<?php
$a = 0;
$b = 1;

for ($i = 1; $i <= 10; $i++) {
$next = $a + $b;
$a = $b;
$b = $next;

if ($next % 2 == 0) {
echo "$next<br>";
}
}
?>


<?php
function greet($name) {
return "Hello, " . $name . "!";
}

echo greet("Alice");
?>


<?php
function square($num) {
return $num * $num;
}

echo "Square of 4: " . square(4);
?>


<!DOCTYPE html>
<html>
<body>
<form method="post">
Enter text: <input type="text" name="text">
<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$text = $_POST["text"];
echo "<p>You entered: $text</p>";
}
?>
</body>
</html>