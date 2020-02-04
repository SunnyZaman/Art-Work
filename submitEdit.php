<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate" />
    <meta http-equiv="Content-Language" content="en_US" />
    <title>Edited Art Work</title>
</head>

<body>
    <!-- <?php
            foreach ($_POST['art'] as $key => $value) {
                if (is_array($value)) {
                    echo "<div><strong>{$key}: </strong>";
                    echo implode(", ", $value);
                    echo "</div>";
                } else {
                    echo "<div>
                       <strong>{$key}: </strong>{$value} 
                    </div>";
                }
            }
            ?> -->
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database, we comment this out if it already exists
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }


    // sql to create table if already created we can comment it out
    $sql = "CREATE TABLE ArtWork (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    descriptionn VARCHAR(300) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    subjects VARCHAR(300) NOT NULL,
    yearCompleted YEAR not NULL,
    museum VARCHAR(300) NOT NULL,
    artType VARCHAR(50) NOT NULL,
    ccSpecs VARCHAR(100) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table ArtWork created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql = "INSERT INTO ArtWork(title, descriptionn, genre, subjects, yearCompleted, museum, artType, ccSpecs)
VALUES (--------list of values from html--------)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
    ?>

</body>

</html>