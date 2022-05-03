<?php
include 'Class/Animal.php';
include 'Class/Cat.php';
include 'Class/Dog.php';
include 'Class/Horse.php';
include 'Class/Veterinary.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cat = new Cat("риба", "дім");
    $dog = new Dog("кістка", "будка");
    $horse = new Horse("яблуко", "конюшня");
    $animal = [$cat, $dog, $horse];
    $veterinary = new Veterinary;
    for ($i = 0; $i < count($animal); $i++) {
        $veterinary->treatAnimal($animal[$i]);
    }
    ?>
</body>

</html>