<?php

print("================================ Task 4 ================================\n\n");

$studentGrades = [
    [
        "Name" => "John Doe",
        "Grades" => [
            "Math" => 95,
            "English" => 80,
            "Science" => 85,
        ]
    ],
    [
        "Name" => "Don Joe",
        "Grades" => [
            "Math" => 80,
            "English" => 70,
            "Science" => 75,
        ]
    ],
    [
        "Name" => "Jane Doe",
        "Grades" => [
            "Math" => 65,
            "English" => 80,
            "Science" => 65,
        ]
    ],
];

function getAverageGrade (array $studentGrades): void
{
    foreach ($studentGrades as $studentGrade)
    {
        extract($studentGrade);

        $totalGrade = array_sum($Grades);

        $averageGrade = $totalGrade / count($Grades);

        printf("Average grade for %s: %.2f\n", $Name, $averageGrade);
    }
}

getAverageGrade($studentGrades);
