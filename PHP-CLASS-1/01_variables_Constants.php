<body>
<?php

// -----------------------------
// 🔸 Echo ব্যবহার
// -----------------------------
echo "<h3>PHP Echo এবং ভেরিয়েবল</h3>";
echo "Welcome to my world<br>";

// -----------------------------
// 🔸 Variable Declaration
// -----------------------------
echo "<h4>🔸 ভেরিয়েবল ডিক্লেয়ার করা</h4>";

$name = 'Humaun kabir';
$myName = 'Md Humaun kabir';

echo "Name: $name <br>";
echo "Full Name: $myName <br>";

// Naming Style: Best Practices
$my_name = "Snake Case"; // Snake Case    -> Variable/function
$myName = "Camel Case";  // Camel Case    -> Method
$MyName = "Pascal Case"; // Pascal Case   ->Class

echo "Style 1: $my_name <br>";
echo "Style 2: $myName <br>";
echo "Style 3: $MyName <br>";

// -----------------------------
// 🔸 Constant Declaration
// -----------------------------
echo "<h4>🔸 কনস্ট্যান্ট ডিক্লেয়ার</h4>";

define("CONSTANT_NAME", "This is a constant");
define("PI", 3.1414);
define("Kabir", 1111);

echo "Constant 1: " . CONSTANT_NAME . "<br>";
echo "Constant 2 (PI): " . PI . "<br>";
echo "Constant 3 (Kabir): " .  Kabir. "<br>";

?>
</body>