<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataType in PHP</title>
</head>
<body>
    <?php
    // Boolean
    $she_is_girl = true;
    var_dump($she_is_girl);
    echo "<br>";
    // Integer
    $age = 20;
    var_dump($age);
    echo "<br>";
    // Floating point or // Double
    $temp = 96.3;
    var_dump($temp);
    echo "<br>";
    // String
    $name = "vahi";
    var_dump($name);
    echo "<br>";
    // Null
    $data = null;
    var_dump($data);
    echo "<br>";

    // 10, specified as octal value
    $a = 012;
    var_dump($a);
    echo "<br>";
    // 1023, specified as hexadecimal value
    $b = 0x3ff;
    var_dump($b);
    echo "<br>";
    // 690, in scientific notation
    $c = 6.9E+2;
    var_dump($c);
    echo "<br>";

    echo "<br>";
    echo "Integer Max value : ".PHP_INT_MAX;
    echo "<br>";
    //define floating-point variable
    $speed = 501.789;
    echo $speed;
    echo "<br>";
    //cast to integer
    $newSpeed = (integer) $speed;
    echo $newSpeed;
    echo "<br>";
    $data = 2.5;
    echo "is String : ".is_string($data);

    /*
    is_bool()
    is_numeric()
    is_int()
    is_float() 0r is_double()
    is_string()
    is_null()
    is_array()
    is_object()
    */
    $data = false;
    echo "<br>";
    echo gettype($data);

    ?>
</body>
</html>