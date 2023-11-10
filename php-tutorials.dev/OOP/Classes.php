<?php
    require 'Animal.php';
    require 'Cow.php';
    require 'Lion.php';

    $cow  = new Cow('herbivore', 'grass');
    $lion = new Lion('canirval', 'meat');

    echo '<b>Cow Object</b> <br>';
    echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
    echo '<b>Lion Object</b> <br>';
    echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();