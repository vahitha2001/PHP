<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in php</title>
</head>
<body>
    <h1>Variables in PHP</h1>
    <?php
    $name="vahi's";
    ?>
    <h2>Welcome to <?php echo $name; ?> home</h2>
    <?php
    //Destroying variables
    //unset($name);
    //echo $name;

    $name="vahi";
    $age=23;
    $percentage=99.9;
//display variables contents
    var_dump($name);
    var_dump($age);
    var_dump($percentage);
    
    ?>
</body>
</html>