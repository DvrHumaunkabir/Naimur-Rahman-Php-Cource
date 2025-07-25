<?php
/*
------------------------------------------------------------
|      PHP Control Structures এবং Alternative Syntax        |
------------------------------------------------------------

 PHP-তে Control Structures কি?
---------------------------------
Control Structures হলো সেই স্টেটমেন্ট যেগুলো প্রোগ্রামের ফ্লো নিয়ন্ত্রণ করে।
যেমন: if-else, switch, for loop, while loop ইত্যাদি।

 কেন Alternative Syntax ব্যবহার করা হয়?
--------------------------------------------
Alternative Syntax সাধারণত HTML টেমপ্লেট বা PHP কোডের সাথে HTML মিক্স করার সময় ব্যবহার করা হয়।
কারণ এটি কোডকে আরো পড়তে সহজ করে তোলে।

------------------------------------------------------------
|    1. IF-ELSE কন্ডিশন (Normal Syntax)                   |
------------------------------------------------------------
*/

$condition = true;  // শর্তের জন্য একটি ভ্যারিয়েবল

if ($condition) {
    // যদি শর্ত সত্য হয়, এই কোড চলবে
    echo "Condition is TRUE";
} else {
    // অন্যথায় এই কোড চলবে
    echo "Condition is FALSE";
}

/*
------------------------------------------------------------
|    Alternative Syntax (IF-ELSE)                         |
------------------------------------------------------------
*/
if ($condition):
    // যদি শর্ত সত্য হয়
    echo "Condition is TRUE (Alternative Syntax)";
else:
    echo "Condition is FALSE (Alternative Syntax)";
endif;


/*
------------------------------------------------------------
|    2. IF - ELSEIF - ELSE (Normal Syntax)                |
------------------------------------------------------------
*/

$anotherCondition = false;

if ($condition) {
    echo "First condition TRUE";
} elseif ($anotherCondition) {
    echo "Second condition TRUE";
} else {
    echo "Both conditions FALSE";
}

/*
------------------------------------------------------------
|    Alternative Syntax (IF - ELSEIF - ELSE)              |
------------------------------------------------------------
*/
if ($condition):
    echo "First condition TRUE (Alt Syntax)";
elseif ($anotherCondition):
    echo "Second condition TRUE (Alt Syntax)";
else:
    echo "Both FALSE (Alt Syntax)";
endif;


/*
------------------------------------------------------------
|    3. WHILE লুপ (Normal Syntax)                         |
------------------------------------------------------------
*/

$count = 1;
while ($count <= 3) {
    echo "Count: $count <br>";
    $count++;
}

/*
------------------------------------------------------------
|    Alternative Syntax (WHILE LOOP)                      |
------------------------------------------------------------
*/
$count = 1;
while ($count <= 3):
    echo "Count (Alt Syntax): $count <br>";
    $count++;
endwhile;


/*
------------------------------------------------------------
|    4. FOR লুপ (Normal Syntax)                           |
------------------------------------------------------------
*/
for ($i = 1; $i <= 3; $i++) {
    echo "Number: $i <br>";
}

/*
------------------------------------------------------------
|    Alternative Syntax (FOR LOOP)                        |
------------------------------------------------------------
*/
for ($i = 1; $i <= 3; $i++):
    echo "Number (Alt Syntax): $i <br>";
endfor;
?>