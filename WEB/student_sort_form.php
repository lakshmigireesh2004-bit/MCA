<!DOCTYPE html>
<html>
<head>
    <title>Student Names Sorter</title>
</head>
<body>
    <h2>Enter Student Names</h2>
    <form method="post" action="">
        Enter names (comma separated): <br>
        <input type="text" name="names" size="50" placeholder="e.g. Asha,Binu,Cyril,Divya,Ebin" required>
        <br><br>
        <input type="submit" name="submit" value="Display and Sort">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Get user input
        $input = $_POST['names'];

        // Convert comma-separated string into an array
        $students = explode(",", $input);

        // Trim whitespace around names
        $students = array_map('trim', $students);

        echo "<h3>Original Array:</h3>";
        print_r($students);

        // Sort ascending
        asort($students);
        echo "<h3><br>Array in Ascending Order:</h3>";
        print_r($students);

        // Sort descending
        arsort($students);
        echo "<h3><br>Array in Descending Order:</h3>";
        print_r($students);
    }
    ?>
</body>
</html>
