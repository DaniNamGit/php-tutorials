<?php
    echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
    date_default_timezone_set("Asia/Calcutta");
    echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");