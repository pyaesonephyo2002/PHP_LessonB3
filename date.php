<?php
echo "<h1>Date</h1>";

// Different date formats
echo "<h3>Today is ".date("Y-m-d")."</h3>";  // 2024-09-05
echo "<h3>Today is ".date("d.m.Y")."</h3>";  // 05.09.2024
echo "<h3>Today is ".date("Y/m/d")."</h3>";  // 2024/09/05
echo "<h3>Today is ".date("d-m-y")."</h3>";  // 05-09-24
echo "<h3>Today is ".date("M d, y")."</h3>"; // Sep 05, 24
echo "<h3>Today is ".date("l")."</h3>";      // Thursday

echo "<h1>Time</h1>";

// Displaying current time in default timezone
echo "<h3>The time is ".date("h:i:sa")."</h3>"; // Current time

// Displaying current timezone
echo "<h3>Current Timezone: ".date_default_timezone_get() . "</h3>";

// Setting timezone to Yangon, Myanmar
date_default_timezone_set("Asia/Yangon");

// Displaying time in Yangon timezone
echo "<h3>The Myanmar time is ".date("h:i:sa")."</h3>"; 

echo "<h1>String to Time</h1>";

// Converting string to time for different dates
$today = strtotime("today");
echo "<h3>Unix timestamp for today is: $today</h3>";
echo "<h3>Today is ".date("d.m.Y",$today)."</h3>";

$tomorrow = strtotime("tomorrow");
echo "<h3>Tomorrow is ".date("d.m.Y",$tomorrow) . "</h3>";

echo "<h3>Next Sunday is ".date("d.m.Y", strtotime("next Sunday"))."</h3>";
echo "<h3>Next 1 week is ".date("d.m.Y", strtotime("+1 week"))."</h3>";
echo "<h3>Next 3 months is ".date("d.m.Y", strtotime("+3 months"))."</h3>";
?>
