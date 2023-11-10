<?php
    try {
        $var_msg = "This is an exception example";
        throw new Exception($var_msg);
    }
    catch (Exception $e) {
        echo "Message: " . $e->getMessage() . '<br>';
        echo "Code: " . $e->getCode() . '<br>';
        echo $e->__toString();
    }
?>