<?php
    $db = new MySQLDriver($host,$db,$uid,$password);
    // $db = new MSSQLServerDriver ($host,$db,$uid,$password);

    $db->db_connect();
    $db->insert($data);