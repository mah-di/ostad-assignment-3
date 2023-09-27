<?php

print("================================ Task 5 ================================\n\n");

function generatePassword(int $length = 12): string
{
    $upperCaseChars = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    
    $lowerCaseChars = str_split("abcdefghijklmnopqrstuvwxyz");
    
    $numericChars = str_split("0123456789");
    
    $specialChars = str_split("!@#$%^&*()_+");
    
    $chars = array_merge($upperCaseChars, $lowerCaseChars, $numericChars, $specialChars);
    
    while(true)
    {
        $password = "";

        $hasUpperCase = $hasLowerCase = $hasNumeric = $hasSpecial = false;

        for ($i = 0; $i < $length; $i++)
        {
            $index = array_rand($chars);

            $char = $chars[$index];
    
            $password .= $char;

            if ($hasUpperCase == false && in_array($char, $upperCaseChars)) $hasUpperCase = true;

            if ($hasLowerCase == false && in_array($char, $lowerCaseChars)) $hasLowerCase = true;

            if ($hasNumeric == false && in_array($char, $numericChars)) $hasNumeric = true;

            if ($hasSpecial == false && in_array($char, $specialChars)) $hasSpecial = true;
        }

        if ($hasUpperCase && $hasLowerCase && $hasNumeric && $hasSpecial) break;

    }
    
    return $password;
}

$password = generatePassword();

printf("Generated Random Password -\n%s", $password);
