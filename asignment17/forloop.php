<?php
// Associative array with student names and grades
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "Diana" => 88,
    "Ethan" => 74
];

// Initialize variables for total grades and count of students
$totalGrades = 0;
$count = 0;

// Iterate over the array using a foreach loop
foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade" . PHP_EOL;
    $totalGrades += $grade; // Add the grade to the total
    $count++; // Increment the count
}

// Calculate the average grade
$averageGrade = $totalGrades / $count;

// Display the average grade
echo "The average grade is: " . number_format($averageGrade, 2) . PHP_EOL;
?>
