<?php
// 1. Connect to Database
$conn = mysqli_connect("localhost", "root", "", "ethilemma");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Get data from the HTML form
$name = mysqli_real_escape_string($conn, $_POST['name']);
$rating = (int)$_POST['rating'];
$message = mysqli_real_escape_string($conn, $_POST['message']);

// 3. Insert into Table
$sql = "INSERT INTO feedback (user_name, rating, message) VALUES ('$name', '$rating', '$message')";

if (mysqli_query($conn, $sql)) {
    // Redirect back to feedback page with a success message
    echo "<script>
            alert('Feedback submitted successfully!');
            window.location.href='feedback.html';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
