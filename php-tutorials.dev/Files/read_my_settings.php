<?php
    $fh = fopen("my_settings.txt", 'r') or die("File does not exist or you lack permission to open it");
    $line = fgets($fh);
    echo $line; fclose($fh);