<?php
    $my_email = "daniel.nam.2004@gmail.com";
    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
        echo "'$my_email' is a valid email address";
    } else {
        echo "'$my_email' is NOT a valid email address";
    }