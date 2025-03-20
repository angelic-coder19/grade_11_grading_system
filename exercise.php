<?php
// The purpose of this program is to act as a grading system

// Takes the students name and score as input 
$name = "Alice";
$score = 200;

if(($score > 100 || $score < 0)) {
    echo "Error: Invalid Score! Score must between 0 and 100";
}
else{
// Display the name and score first
echo "Name: $name <br> Score: $score <br>";

// Display the Grade next
if ($score >= 90 && $score <= 100) 
{
    echo "Grade: A <br>";
} 
else if($score >= 75 && $score <= 89)
{
    echo "Grade: B <br>";
}
else if($score >= 50 && $score <= 74)
{
    echo "Grade: C <br>";
}
else
{
    echo "Grade: F <br>";
}


// Displays a score that is greater than 50 as pass else fail
echo ($score >= 50)? "Result: Pass <br>" : "Result: Fail <br>";

// Displays wether the user is eligible for an academic award
echo ($score >= 90 && $score <= 100)? "Eligible for Academic Award": "No Academic Award";
}
?>
