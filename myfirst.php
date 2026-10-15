<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> Using PHP Variables, arrays and operators</title>
    <meta name="description" content="A simple PHP script demonstrating variables, arrays, and operators.">
    <meta name="keywords" content="PHP, Variables, Arrays, Operators, Marks, Average, Passed, Failed">
    <meta name="author" content="Lee Xiao Yan">
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
<?php
    $marks=array(85,85,95); // declare and initialize
    $marks[1]=90; // modify second element
    $ave=($marks[0] + $marks[1] + $marks[2])/3; //Compute Average
    if($ave>=50)
        $status="PASSED";
    else
        $status="FAILED";
    echo "<p>The average score is $ave. You $status.</p>";
?>
</body>
</html>
