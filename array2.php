<?php

    //sorting
    //sort() => Array ascending order (a-z)
    $programmings = ["PHP", "Java", "JavaScript", "C", "C++", "C#", "R", "Python"];
    sort($programmings);
    foreach ($programmings as $programming) {
        echo "<h3>$programming</h3>";
    }

    //rsort() => Array descending order
    echo "<h1>R-Sort</h1>";
    rsort($programmings);
    foreach ($programmings as $programming) {
        echo "<h3>$programming</h3>";
    }

    // Associative array
    $foods = [
        "breakfast" => "Mohingar",
        "lunch" => "Burmese rice and curry",
        "dinner" => "Mala Xianguo",
    ];

    //ksort() => Associative array ascending order according to key
    echo "<h1>K-Sort</h1>";
    ksort($foods);
    foreach ($foods as $key => $food) {
        echo "<h3>Key is $key and value is <i>$food</i>.</h3>";
    }

    //krsort() => Associative array descending order according to key
    echo "<h1>K-R Sort</h1>";
    krsort($foods);
    foreach ($foods as $key => $food) {
        echo "<h3>Key is $key and value is <i>$food</i>.</h3>";
    }

    //asort() => Associative array ascending order according to value
    echo "<h1>A-Sort</h1>";
    asort($foods);
    foreach ($foods as $key => $food) {
        echo "<h3>Key is $key and value is <i>$food</i>.</h3>";
    }

    //arsort() => Associative array descending order according to value
    echo "<h1>AR-Sort</h1>";
    arsort($foods);
    foreach ($foods as $key => $food) {
        echo "<h3>Key is $key and value is <i>$food</i>.</h3>";
    }

    // Array push and pop
    $colors = ["Green", "Red", "Blue", "Yellow", "Brown"];
    print_r($colors);
    echo "<br>";

    array_push($colors, "Pink", "Purple");
    print_r($colors);
    echo "<br>";

    array_pop($colors);
    print_r($colors);
    echo "<br>";

    unset($colors[2]);
    print_r($colors);
    echo "<br>";

    // Array to String
    $actors = ["Daung", "Pyay Ti Oo", "Lu Min", "Thet Mon Myint", "Paing Phyo Thu"];
    print_r($actors);
    echo "<br>";
    echo gettype($actors);
    
    // Corrected implode function
    $actors_string = implode("/", $actors);
    echo "<h3>$actors_string</h3>";
    echo gettype($actors_string);

    // String to array
    $actors_array = explode("/", $actors_string);
    print_r($actors_array);

?>
