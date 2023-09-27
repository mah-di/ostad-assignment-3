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

function getaverageMark (array $studentGrades): void
{
    foreach ($studentGrades as $studentGrade)
    {
        extract($studentGrade);

        $totalMarks = array_sum($Grades);

        $averageMark = $totalMarks / count($Grades);

        $grade = ($averageMark < 33) ? "F" : (($averageMark < 40) ? "D" : (($averageMark < 50) ? "C" : (($averageMark < 60) ? "B" : (($averageMark < 70) ? "A-" : (($averageMark < 80) ? "A" : "A+")))));

        printf("Student Name - %s | Total Marks - %d | Average - %.2f | Grade - %s\n", $Name, $totalMarks, $averageMark, $grade);
    }
}

getaverageMark($studentGrades);
