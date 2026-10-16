<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
    <meta name="description" content="A simple PHP script demonstrating variables, arrays, and operators.">
    <meta name="keywords" content="Rohirrim, Tour, Booking, Confirmation, Middle Earth, Hobbbit">
    <meta name="author" content="Lee Xiao Yan">
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php

    function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $err_msg = "";

        $firstname = clean_input($_POST["firstname"]);
        $lastname = clean_input($_POST["lastname"]);
        $age = clean_input($_POST["age"]);
        $partysize = clean_input($_POST["partysize"]);
        $food = clean_input($_POST["food"]);
    

    if (empty($firstname)) {
        $err_msg.="<p>Please enter your first name.</p>";
    } elseif (!preg_match("/^[a-zA-Z]{2,40}$/", $firstname)) {
        $err_msg.="<p>Only letters are allowed in first name.</p>";
    }

    
    if (empty($lastname)) {
        $err_msg.="<p>Please enter your last name.</p>";
    } elseif (!preg_match("/^[a-zA-Z]{2,40}$/", $lastname)) {
        $err_msg.="<p>Only letters are allowed in last name.</p>";
    }

    if (empty($age)) {
        $err_msg.="<p>Please enter your age.</p>";
    } elseif (!is_numeric($age) || $age < 0) {
        $err_msg.="<p>Age must be a valid positive number</p>";
    }

    if (empty($partysize)) {
        $err_msg.="<p>Please enter the number of travellers.</p>";
    } elseif (!is_numeric($partysize) || $partysize <= 0) {
        $err_msg.="<p>Number of travellers must be a valid positive number</p>";
    }

    if (!isset($_POST['species'])) {
        $err_msg.="<p>Please select a species.</p>";
    } else {
        $species = clean_input($_POST["species"]);
    }

    if (!isset($_POST['4day']) && !isset($_POST['10day'])) {
        $err_msg.="<p>Please select at least one tour option.</p>";
    }

    if ($err_msg != "") {
        echo $err_msg;
      
    } else {

        echo "<p>Welcome " . $firstname . " " . $lastname . "!</p>";

        $tourStr = "You are now booked on the ";
        if (isset($_POST['4day']) && isset($_POST['10day'])) {
            $tourStr .= "Four-Day Tour and Ten-Day Tour.";
        } elseif (isset($_POST['4day'])) {
            $tourStr .= "Four-Day Tour.";
        } elseif (isset($_POST['10day'])) {
            $tourStr .= "Ten-Day Tour.";
        }

        echo "<p>" . $tourStr . "</p>";

        $speciesName = "";
        if ($species == "M"){$speciesName = "Human";}
        elseif ($species == "D"){$speciesName = "Dwarf";}
        elseif ($species == "E"){$speciesName = "Elf";}
        elseif ($species == "H"){$speciesName = "Hobbit";}
        echo "<p>Species: " . $speciesName . "</p>";

        echo "<p>Age: " . $age . "</p>";
        echo "<p>Meal Preference: " . $food . "</p>";
        echo "<p>Number of Travellers: " . $partysize . "</p>";
    }

    }else
    {
        header("Location: register.html"); // redirect to the form
    }

?>
</body>
</html>