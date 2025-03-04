  <?php
$mathProblem = array();
$problem1 = "What is the value of x in the equation: 3x + 5 = 20?";
$problem2 = "Find the value of y in the equation: y = mx + b, where m = 2 and b = 3.";
$mathProblem[0] = $problem1;
$mathProblem[1] = $problem2;

shuffle($mathProblem);
echo "<p>" . $mathProblem[0] . "</p>";
echo "<p>" . $mathProblem[1] . "</p>";
?>