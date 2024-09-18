    <?php

    // Function without arguments
    function myName() {
        echo "<h1>My Name is Hein Min Htet</h1>";
    }
    myName();

    // Function with argument
    $brother = "Aung Aung";
    function myBro($name) {
        echo "<h1>My brother name is $name.</h1>";
    }
    myBro($brother);

    // Function for adding numbers
    function sum($num1, $num2) {
        $result = $num1 + $num2;
        echo "<h1>$result</h1>";
    }
    sum(123, 321);

    // Function for subtracting elements of an array
    function myArray($num) {
        $result = $num[0] - $num[1];
        echo "<h1>$result</h1>";
    }
    myArray([32, 21]); // Passing an array directly

    // Function with default parameters for multiplication
    function myNumber($number1 = 1, $number2 = 1) {
        $result = $number1 * $number2;
        echo "<h1>$result</h1>";
    }
    myNumber(10, 20);

    ?>
