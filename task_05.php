<?php

print("================================ Task 5 ================================\n\n");

function generatePassword(int $length = 12): string
{
    $characters = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+");

    $password = "";

    for ($i = 0; $i < $length; $i++)
    {
        $index = array_rand($characters);

        $password .= $characters[$index];
    }

    return $password;
}

$password = generatePassword();

printf("Generated Random Password -\n%s", $password);
