<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';

    $cycle = new Bicycle("grey", 15);
    $car = new Car("red", 5, "gazoil");

    var_dump($cycle);
    var_dump($car);

    echo 'Bicycle :' . '<br>';
    echo $cycle->start();
    echo $cycle->forward();
    echo $cycle->brake();

    echo '<br>';

    echo 'Car :' . '<br>';
    echo $car->start();
    echo $car->forward();
    echo $car->brake();

