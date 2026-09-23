<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rohirrim Tour Booking Confirmation">
    <meta name="keywords" content="Rohirrim, booking, confirmation">
    <meta name="author" content="Thanathep">
    <title>Booking Confirmation</title>
</head>

<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php

    
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        $firstname = "";
    }

    
    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        $lastname = "";
    }

    echo "<p>Welcome $firstname $lastname!</p>";


    
    $bookings = array();

    if (isset($_POST["accom"])) {
        $bookings[] = "Accommodation";
    }

    if (isset($_POST["4day"])) {
        $bookings[] = "Four-day tour";
    }

    if (isset($_POST["10day"])) {
        $bookings[] = "Ten-day tour";
    }

    if (count($bookings) > 0) {
        echo "<p>You are now booked on the " . implode(" and ", $bookings) . "</p>";
    }


    
    if (isset($_POST["species"])) {
        $species = $_POST["species"];

        if ($species == "M") {
            $species = "Human";
        } elseif ($species == "D") {
            $species = "Dwarf";
        } elseif ($species == "E") {
            $species = "Elf";
        } elseif ($species == "H") {
            $species = "Hobbit";
        }

        echo "<p>Species: $species</p>";
    }


    
    if (isset($_POST["age"])) {
        $age = $_POST["age"];
        echo "<p>Age: $age</p>";
    }


    
    if (isset($_POST["food"])) {
        $food = $_POST["food"];
        echo "<p>Meal Preference: $food</p>";
    }


    
    

    if (isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
        echo "<p>Number of travellers: $partysize</p>";
    }

    ?>

</body>

</html>