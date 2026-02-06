<?php
$conn = mysqli_connect("localhost", "root", "", "ethilemma");
$result = mysqli_query($conn, "SELECT * FROM dilemmas ORDER BY created_at DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card'>";
    echo "<h3>" . $row['user_name'] . " asks:</h3>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<button>Give a Suggestion</button>";
    echo "</div><hr>";
}
?>
 
