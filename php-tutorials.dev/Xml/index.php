<?php
    $xml = simplexml_load_file('employees.xml');
    echo '<h2>Employees Listing</h2>';
    $list = $xml->record;
    
    for ($i = 0; $i < count($list); $i++) {
        echo '<b>Man no:</b> ' . $list[$i]->attributes()->man_no . '<br>';
        echo 'Name: ' . $list[$i]->name . '<br>';
        echo 'Position: ' . $list[$i]->position . '<br><br>';
    }