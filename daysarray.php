<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> Using PHP Variables, arrays and operators</title>
    <meta name="description" content="A simple PHP script demonstrating variables, arrays, and operators.">
    <meta name="keywords" content="PHP, Variables, Arrays, Operators, Days of the week, English, French">
    <meta name="author" content="Lee Xiao Yan">
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
<?php
    $days= array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are:<br>";
    echo implode (", ", $days) . ".</p>";

    $days= array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are:<br>";
    echo implode (", ", $days) . ".</p>";
?>
</body>
</html>
