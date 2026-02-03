<?php
// 1. Database Connection
$conn = mysqli_connect("localhost", "root", "", "ethilemma");

// 2. Handle Form Submission
if (isset($_POST['send_feedback'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rating = $_POST['rating'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO feedback (user_name, rating, message) VALUES ('$name', '$rating', '$msg')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for your feedback! It has been saved to the database.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ethilemma | Feedback</title>
    <link rel="stylesheet" href="mystylesheet.css">
    <style>
        /* Specific styles for the feedback form to keep it neat */
        .feedback-form {
            max-width: 600px;
            margin: 20px auto;
            text-align: left;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
        }
        .feedback-form input, .feedback-form textarea, .feedback-form select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
        }
        .submit-btn {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }
        .submit-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<h1>ETHILEMMA</h1>
<p><i>A peaceful space for ethical reflection</i></p>

<div class="navbar">
    <a href="index.html">Home</a>
    <a href="dilemmas.php">Dilemmas</a>
    <a href="suggest.php">Suggestions</a>
    <a href="materials.html">Materials</a>
    <a href="feedback.php">Feedback</a>
    <a href="contact.html">Contact</a>
</div>

<div class="main-content">
    <h2>Share Your Experience</h2>
    <p>Your feedback helps us maintain a constructive and peaceful environment.</p>

    <div class="feedback-form">
        <form method="POST" action="feedback.php">
            <label for="name">Your Name (or Anonymous):</label>
            <input type="text" id="name" name="name" placeholder="Enter your name..." required>

            <label for="rating">How would you rate your experience?</label>
            <select id="rating" name="rating">
                <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                <option value="4">⭐⭐⭐⭐ - Very Good</option>
                <option value="3">⭐⭐⭐ - Good</option>
                <option value="2">⭐⭐ - Fair</option>
                <option value="1">⭐ - Poor</option>
            </select>

            <label for="message">Your Thoughts:</label>
            <textarea id="message" name="message" placeholder="What did you like? What can we improve?" required style="height:150px;"></textarea>

            <button type="submit" name="send_feedback" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</div>

<div class="footer">
    © 2026 Ethilemma | All rights reserved
</div>

<script src="STYLE.js"></script>

</body>
</html>

