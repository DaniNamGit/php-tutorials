<?php
    $my_text="I love regular expressions!";
    $my_array  = preg_split("/ /", $my_text);
    print_r($my_array);