<?php
    // $user_input = "Your site rocks";
    // echo "<h4>My Commenting System</h4>";
    // echo $user_input;

    // $user_input = "<script>alert('Your site sucks!');</script>";
    // echo "<h4>My Commenting System</h4>";
    // echo $user_input;

    $user_input = "<script>alert('Your site sucks!');</script>";
    echo strip_tags($user_input);