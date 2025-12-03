<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>
    <h2>List of Indian Cricket Players</h2>

    <?php
    // Step 1: Create an array of player names
    $players = array("Rohit Sharma", "Virat Kohli", "Ravindra Jadeja", "KL Rahul", "Jasprit Bumrah");

    // Step 2: Display the array in an HTML table
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Sl. No</th><th>Player Name</th></tr>";

    $i = 1;
    foreach ($players as $name) {
        echo "<tr><td>$i</td><td>$name</td></tr>";
        $i++;
    }

    echo "</table>";
    ?>
</body>
</html>
