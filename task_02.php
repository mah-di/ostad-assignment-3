<?php

print("================================ Task 2 ================================\n\n");

$numbers = [];

for ($i = 1; $i <= 10; $i++) $numbers[] = $i;

function oddNumbers (array $numbers): array
{
    $oddNumbersArray = array_filter($numbers, fn ($number) => $number % 2 !== 0);

    return $oddNumbersArray;
}

$filteredNumbers = oddNumbers($numbers);

print_r($filteredNumbers);
