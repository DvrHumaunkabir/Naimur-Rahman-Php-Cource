<body>
<?php

echo "<h3>PHP Operators (অপারেটর)</h3>";

// -----------------------------
// 🔸 Arithmetic Operators
// -----------------------------

$a = 15;
$b = 2;

$addition = $a + $b;              // যোগ করা
$subtraction = $a - $b;           // বিয়োগ করা
$multiplication = $a * $b;        // গুণ করা
$division = $a / $b;              // ভাগ করা
$modulus = $a % $b;               // ভাগ শেষ
$exponentiation = $a ** 2;        // পাওয়ার

echo "<h4>🔸 গাণিতিক অপারেশন</h4>";
echo "$a + $b = $addition <br>";
echo "$a - $b = $subtraction <br>";
echo "$a * $b = $multiplication <br>";
echo "$a / $b = $division <br>";
echo "$a % $b = $modulus <br>";
echo "$a ^ 2 = $exponentiation <br>";

// -----------------------------
// 🔸 Assignment Operators
// -----------------------------
echo "<h4>🔸 Assignment অপারেটর</h4>";

$a = 10;
echo "Initial value of a = $a <br>";

$a = $a + 5;
echo "After a = a + 5 → $a <br>";

$a += 5;
echo "After a += 5 → $a <br>";

?>
</body>