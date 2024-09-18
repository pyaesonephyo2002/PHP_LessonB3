    <?php
    // Indexed array
    $laptops = array("Apple", "Dell", "Lenovo", "Asus", "HP", "ACER");
    print_r($laptops);
    echo "<br>";
    echo $laptops[1]; // Outputs 'Dell'
    echo "<br>";

    $fruits = [];
    $fruits[0] = "Apple";
    $fruits[1] = "Orange";
    $fruits[2] = "Banana";
    $fruits[3] = "Mango";
    print_r($fruits);
    echo "<br>";


    //Associative Array
    $students = [
        "name" => "Mg Mg",
        "age"  =>  23,
        "year" =>  "Second Year",
        "email" =>  "pico@gmail.com",
        "phone" =>  "09364948484",
    ];
        
    print_r($students);
    echo "<br>";
    echo $students['name'];


    foreach($students as $key=>$value) {
        echo "<h1>$key is  $value </h1>";
    }
    //multidimensional array
    $foods = [
        'breakfast' => ['Mohingar', 'Nan Gyi Thoke', 'Kaung Nyin Paung'],
        'lunch' => ['shan style rice', 'rice and burmese curry'],
        'dinner'=> ['Chepatis and curry', 'Kausetho', 'Latphat Thoke'],
    ];
    print_r($foods);
    foreach($foods as $key=>$value) {
        foreach($value as $k=>$v){
            echo "<h3>$v</h3>";
        }
    }

    foreach($foods as $key=>$items){
        echo "<h1>$key</h1>";
        echo "<ul>";
            foreach($items as $item){
                echo "<li> $item </'li>";
            }
            echo "</ul>";
    }
    ?>

   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($foods as $key=>$value){
    ?>
        <h1><?php echo $key ?> </h1>
        <ul>
            <?php foreach($value as $v) { ?>
                <li><?php echo $v ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

</body>
</html>




