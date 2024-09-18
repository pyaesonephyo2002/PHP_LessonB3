<?php
    echo "<h1>Date</h1>";
    echo "<h3>Today is ".date("Y-m-d")."</h3>";
    echo "<h3>Today is ".date("d.m.Y")."</h3>";
    echo "<h3>Today is ".date("Y/m/d")."</h3>";
    echo "<h3>Today is ".date("d-m-Y")."</h3>";
    echo "<h3>Today is ".date("M d, Y")."</h3>";
    echo "<h3>Today is ".date("l")."</h3>"; // Day of the week

    echo "<h1>Time </h1>";
    echo "<h3>The time is ".date("h:i:sa")."</h3>";

    echo date_default_timezone_get();

    date_default_timezone_set("Asia/Yangon");

    echo "<h3>The Myanmar time is ".date("h:i:sa")."</h3>";

    echo "<h1>String to time</h1>";
    $today = strtotime("today");
    echo $today;
    echo "<h3>Today is ".date("d.m.Y", $today)."</h3>";

    $tomorrow = strtotime("tomorrow");
    echo "<h3>Tomorrow is ".date("d.m.Y", $tomorrow)."</h3>";

    echo "<h3>Next Sunday is ".date("d.m.Y", strtotime("next Sunday"))."</h3>";
    echo "<h3>Next 1 week is ".date("d.m.Y", strtotime("+1 weeks"))."</h3>";
    echo "<h3>Next 3 Months is ".date("d.m.Y", strtotime("+3 months"))."</h3>";
?>
