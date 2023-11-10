<?php
    setcookie("username", "DaniNam", time() + 60, '/'); // expires after 60 seconds
    echo 'The cookie has been set for 60 seconds';