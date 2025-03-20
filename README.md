# grade_11_grading_system 
this program does the following:
You are building a Student Grade Evaluation System for a school. The system should:
1.
Take a student's name and score as input.
2.
Determine the grade based on the score:
•
90 - 100 → Grade A
•
75 - 89 → Grade B
•
50 - 74 → Grade C
•
Below 50 → Grade F
3.
If the score is greater than or equal to 50, display "Pass", otherwise display "Fail".
4.
If the score is invalid (less than 0 or more than 100), display an error message.
5.
Use a ternary operator to check if the student is eligible for an academic award:
•
If grade is A, show "Eligible for Academic Award"
•
Otherwise, show "No Academic Award"
Example Output:
Test Case 1:
Input:
Name: Alice
Score: 92
Output:
Student: Alice
Score: 92
Grade: A
23
Result: Pass
Eligible for Academic Award
Test Case 2:
Input:
Name: Bob
Score: 45
Output:
Student: Bob
Score: 45
Grade: F
Result: Fail
No Academic Award
Test Case 3 (Invalid Score):
Input:
Name: John
Score: 120
Output:
Error: Invalid score! Score must be between 0 and 100.
