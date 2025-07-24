<body>
<?php

echo "<h3>PHP Data Types এবং Array</h3>";

// -----------------------------
// 🔸 Scalar Types
// -----------------------------

$age = 27;                      // Integer
$price = 48.43;                 // Float
$myName = "Humaun Kabir";       // String
$is_admin = true;               // Boolean

echo "<h4>🔸 Scalar Types</h4>";
echo "Age: $age <br>";
echo "Price: $price <br>";
echo "Name: $myName <br>";
echo "Is Admin? " . ($is_admin ? "Yes" : "No") . "<br>";

// -----------------------------
// 🔸 Array
// -----------------------------
echo "<h4>🔸 অ্যারে ব্যবহার</h4>";

$fruits = ["mango", "apple", "banana", "orange", 28];

echo "Fruits List:<br>";
echo "1st Fruit: " . $fruits[0] . "<br>";
echo "2nd Fruit: " . $fruits[1] . "<br>";
echo "Last Item (Number): " . $fruits[4] . "<br>";

// -----------------------------
// 🔸 Null মান
// -----------------------------
echo "<h4>🔸 Null মান</h4>";

$variable = NULL;
echo "Variable is NULL: ";
var_dump($variable); // Null প্রিন্ট হবে

?>
</body>