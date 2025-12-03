<!DOCTYPE html>
<html>
<head>
    <title>Simple Feedback Form</title>
</head>
<body>
    <h2>Student Feedback Form</h2>

    <form method="post" action="">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Feedback:</label><br>
        <textarea name="feedback" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit Feedback">
    </form>

    <hr>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        echo "<h3>Thank you for your feedback!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Your Feedback:</strong> $feedback</p>";
    }
    ?>
</body>
</html>
