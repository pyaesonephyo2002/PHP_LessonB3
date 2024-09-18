<?php
// One Condition
$x = 10;
$y = 10;
if ($x == $y) {
    echo "<h3>X and Y are equal.</h3>";
}

// Two Conditions
date_default_timezone_set('Asia/Yangon');
$t = date("H");

if ($t >= 20 && $t <= 22) {
    echo "<h3>This is lecture time.</h3>";
} else {
    echo "<h3>This is me time.</h3>";
}

// Ternary Condition
echo ($x == $y) ? "<h3>X and Y are equal.</h3>" : "<h3>X and Y are not equal.</h3>";

// Many Conditions
$d = date("D");
    // echo $d;

if ($d == "Mon") {
    echo "<h3>Today is Monday.</h3>";
} elseif ($d == "Tue") {
    echo "<h3>Today is Tuesday.</h3>";
} elseif ($d == "Wed") {
    echo "<h3>Today is Wednesday.</h3>";
} elseif ($d == "Thu") {
    echo "<h3>Today is Thursday.</h3>";
} elseif ($d == "Fri") {
    echo "<h3>Today is Super Friday.</h3>";
} else {
    echo "<h3>Today is a Holiday.</h3>";
}
?>
