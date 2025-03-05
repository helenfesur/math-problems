<?php
$mathProblem = array(
    "What is the value of x in the equation 2x + 5 = 11?",
    "Find the missing number in the sequence 1, 2, 3, 4, 5, ?",
    "Solve for x in the equation 2x - 4 = 6"
);
$randomProblemIndex = rand(0, count($mathProblem) - 1);
echo $mathProblem[$randomProblemIndex];
?>