<?php

print("================================ Task 3 ================================\n\n");

$grades = [85, 92, 78, 88, 95];

function arrayDesc (array $array): void
{
    rsort($array);

    print_r($array);
}

arrayDesc($grades);
