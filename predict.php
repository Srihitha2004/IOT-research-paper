<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $urineValue = $_POST['urineValue'];
    $biomarkValue = $_POST['biomarkValue'];
    $sensorValue = $_POST['sensorValue'];

    // Perform any necessary validation
    // For example, you can check if required fields are not empty

    // Connect to your database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert form data into the database
    $sql = "INSERT INTO Patients (name, dob, gender, urineValue, biomarkValue, sensorValue)
            VALUES ('$name', '$dob', '$gender', '$urineValue', '$biomarkValue', '$sensorValue')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
