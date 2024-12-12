<?php

    // Calculate the discount for December sales according to how often he/she came in the year 2024

    function discount($a,  $customer) {
        $discount = 0;

        // For customers
        if ($customer >= 20){
            
            if ($a >= 100000) {
                $discount = 0.5;
            }
    
            elseif ($a < 100000 && $a >= 75000) {
                $discount = 0.4;
            }
            
            elseif ($a < 75000 && $a >= 50000) {
                $discount = 0.3;
            }
            
            elseif ($a < 50000 && $a >= 30000) {
                $discount = 0.2;
            }
    
            else {
                $discount = 0.1;
            }
        }
        
        else{
            
            if ($a >= 100000) {
                $discount = 0.2;
            }
    
            elseif ($a < 100000 && $a >= 75000) {
                $discount = 0.15;
            }
            
            elseif ($a < 75000 && $a >= 50000) {
                $discount = 0.1;
            }
            
            else {
                $discount = 0.05;
            }
        }
        
        // Calculate the amount to be paid ater the discount has been made
        $finalAmount = $a - ($a * $discount);
        return $finalAmount;
    }
    
    // Example
    echo "For a customer that purchases 50 times according to database<br>";  
    $a = 120000;
    $customer = 50;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 40 times according to database<br>";
    $a = 100000;
    $customer = 45;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 40 times according to database<br>";  
    $a = 80000;
    $customer = 40;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 28 times according to database<br>";  
    $a = 68000;
    $customer = 28;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 25 times according to database<br>";  
    $a = 42000;
    $customer = 25;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 32 times according to database<br>";  
    $a = 20000;
    $customer = 32;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 17 times according to database<br>";  
    $a = 150000;
    $customer = 17;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 8 times according to database<br>";  
    $a = 80000;
    $customer = 8;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 10 times according to database<br>";  
    $a = 70000;
    $customer = 10;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
    echo "For a customer that purchases 5 times according to database<br>";  
    $a = 40000;
    $customer = 5;
    
    $finalPrice = discount($a, $customer);
    echo "The Total Amount = # $a <br>";
    echo "The Discounted Amount = # $finalPrice <br><br>";
    
    
