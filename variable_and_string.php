<?php
    //variable
    //Naming Rule - No Space, No special character  !@#$...  can't be a number on first character

    $name = "Pyae Son Phyo";
    $address = "Yangon";


    echo "My name is $name";
    echo '<br>';
    echo 'I live in $address<br>';

    echo 'I live in '.$address;
    echo '<br>';
    echo $name. ' Live in '.address;





    //.=
    $first_name = 'Alan';
    echo "<p>$first.
    _name</p>";
    $last_name = 'Walker';
    echo "<p>$last_name</p>";
    $first_name •= 'Walker';
    echo "<p>$first.
    _name</p>";
    //trim() = remove first space and last space
    $singer = ' Taylor Swift ';
    echo "<p›My favrious singer is$singer.</p›"; echo "<p>My favrious singer is".trim($singer)."
    •</p»";
    $singer_length = trim($singer);
    //strtolower(string) => change to lowercase echo strolower ($singer);
    echo "<br›";
    //strotoupper(string) = change to uppercase
    echo strtoupper ($singer);
    echo "<br>";
    //substr(string, start(0), number) = substring
    echo substr ("Hello HeinLearner", 6); echo "<br>";
    echo substr("Hello HeinLearner", 6,4); echo "<br>";
    echo substr("Hello HeinLearner", 10,5);
    echo "<br>";
    //str_replace(search, replace, subject)
    $city = 'Hello Mandalay';
    echo "<p>$city</p>›";
    echo str_replace( 'Mandalay', 'Smart City', Scity) ;
