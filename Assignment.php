<?php

// Assignments
// Create variable for the following: Boolean, Number, String & Array
// Echo each variable and item in your array
// How to echo a anew line

// Answers

    $string = "Mohammed Muteqeeyat Wuraola<br>";
    echo $string;

    $int = 2008;
    echo "$int<br>";

    $boolean = true;
    echo "$boolean<br>";

    //Array
     
    $bestFriends = array("Olorunkosebi Aisha", "Atobiloye Tasleemah", "Mahfoozah", "Aisha Atobiloye", "My Mummy");
    echo "<pre>";
    print_r($bestFriends);
    echo "</pre>";

    $age = [16, 18, 5, 5, 00];
    echo "<pre>";
    print_r($age);
    echo "</pre>";

    $bestFood = ["Ekuru", "Jollof Rice", "Rice", "Cereal", "Pounded yam"];
    echo "<pre>";
    print_r($bestFood);
    echo "</pre>";


?>