<?php
    $my_url = "www.daninam.com";
    if (preg_match("/daninam/", $my_url)) {
        echo "The url '$my_url' contains 'daninam'";
    } else {
        echo "The url '$my_url' does not contain 'daninam'";
    }