<?php require "example06.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assosiative Arrays</title>
</head>
<body>
<?php
    echo "<pre>",print_r($person),"</pre>";
    echo $person["age"];
    echo "<br>";
    $person["experience"]=6;
    unset($person["age"]);
    foreach($person as $key => $value):
        var_dump($key);
        var_dump($value);
        echo "<br>";
    endforeach;
    die("This is the end of script");
?>
</body>
</html>
