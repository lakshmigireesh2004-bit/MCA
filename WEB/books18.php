<!DOCTYPE html>
<html>
<head>
    <title>Simple Library App</title>
</head>
<body>
    <h2>Add Book Information</h2>
    <form method="post" action="">
        Accession Number: <input type="number" name="accno" required><br><br>
        Title: <input type="text" name="title" required><br><br>
        Author: <input type="text" name="author" required><br><br>
        Edition: <input type="text" name="edition" required><br><br>
        Publisher: <input type="text" name="publisher" required><br><br>
        <input type="submit" name="add" value="Add Book">
    </form>

    <hr>

    <h2>Search Book by Title</h2>
    <form method="post" action="">
        Enter Title: <input type="text" name="search_title" required>
        <input type="submit" name="search" value="Search">
    </form>

    <hr>

    <?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "library");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Add Book
    if (isset($_POST['add'])) {
        $acc = $_POST['accno'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
        $publisher = $_POST['publisher'];

        $sql = "INSERT INTO books (accession_no, title, author, edition, publisher)
                VALUES ('$acc', '$title', '$author', '$edition', '$publisher')";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'>Book added successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Search Book
    if (isset($_POST['search'])) {
        $search_title = $_POST['search_title'];
        $result = mysqli_query($conn, "SELECT * FROM books WHERE title LIKE '%$search_title%'");

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Search Results:</h3>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>
                    <tr>
                        <th>Accession No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['accession_no']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['author']}</td>
                        <td>{$row['edition']}</td>
                        <td>{$row['publisher']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color:red;'>No books found with that title.</p>";
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>
