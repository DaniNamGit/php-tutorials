<?php
    require 'config.php';
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=UTF8";

    try {
        $pdo = new PDO($dsn, $config['user'], $config['password']);
        if ($pdo) echo "Connected to the {$config['dbname']} database successfully!";

        // $stmt = $pdo->prepare("CREATE TABLE IF NOT EXISTS `my_contacts` (
        //     `id` int(11) NOT NULL AUTO_INCREMENT,
        //     `full_names` varchar(255) NOT NULL,
        //     `gender` varchar(6) NOT NULL,
        //     `contact_no` varchar(75) NOT NULL,
        //     `email` varchar(255) NOT NULL,
        //     `city` varchar(255) NOT NULL,
        //     `country` varchar(255) NOT NULL,
        //     PRIMARY KEY (`id`)
        // )");
        
        $stmt = $pdo->prepare("INSERT INTO `my_contacts` (`id`, `full_names`, `gender`, `contact_no`, `email`, `city`, `country`) VALUES
        (1, 'Zeus', 'Male', '111', 'zeus @ olympus . mt . co', 'Agos', 'Greece'),
        (2, 'Anthena', 'Female', '123', 'anthena @ olympus . mt . co', 'Athens', 'Greece'),
        (3, 'Jupiter', 'Male', '783', 'jupiter @ planet . pt . co', 'Rome', 'Italy'),
        (4, 'Venus', 'Female', '987', 'venus @ planet . pt . co', 'Mars', 'Italy');");

        $stmt->execute();
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }