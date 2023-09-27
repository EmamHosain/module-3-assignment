<?php

/**
 * Create a PHP function called generatePassword($length)
 *  that generates a random password of the specified length. 
 * The password should include lowercase letters, uppercase letters, 
 * numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a 
 * length of 12 characters using this function and print the password.
 */


 function generatePassword($length){
    $smallLetters = "abcdefghijklmnopqrstuvwxyz";
    $capitalLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $specialCharacters = "!@#$%^&*()_+";
    $allLetters = $smallLetters . $capitalLetters . $numbers . $specialCharacters;
    $password = "";
    $lettersLength = strlen($allLetters);
    
    for($i = 0; $i < $length; $i++){
        $letterRandomIndex = mt_rand(0, $lettersLength - 1);
        $randomLetter = $allLetters[$letterRandomIndex];
        $password = $password . $randomLetter;
    }
    return $password;
 }

$password = generatePassword(12);
echo $password;