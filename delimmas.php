
<?php
$conn = mysqli_connect("localhost", "root", "", "ethilemma");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
    $text = $_POST['content'];
    
    $query = "INSERT INTO dilemmas (user_name, content) VALUES ('$name', '$text')";
    mysqli_query($conn, $query);
    echo "Dilemma posted successfully!";
}
?>
<form method="POST">
    <input type="text" name="user_name" placeholder="Your Name">
    <textarea name="content" placeholder="Share your dilemma..."></textarea>
    <button type="submit">Post</button>
</form>
