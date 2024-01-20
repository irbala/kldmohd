<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "1203-Fay#0509083080";
$dbname = "kldmohd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $conn->real_escape_string($_POST["name"]);
    $country = $conn->real_escape_string($_POST["country"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $message = $conn->real_escape_string($_POST["message"]);
    $bookingDate = $conn->real_escape_string($_POST["bookingDate"]);
    $bookingTime = $conn->real_escape_string($_POST["bookingTime"]);

    // Insert data into the database
    $sql = "INSERT INTO book (name, country, phone, message, bookingDate, bookingTime) 
            VALUES ('$name', '$country', '$phone', '$message', '$bookingDate', '$bookingTime')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "خطأ في إرسال الرسالة: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
