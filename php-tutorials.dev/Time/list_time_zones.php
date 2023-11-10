<?php
    $timezone_identifiers = DateTimeZone::listIdentifiers();

    foreach($timezone_identifiers as $key => $list){
        echo $list . "<br/>";
    }