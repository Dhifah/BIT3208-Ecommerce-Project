<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM users");

echo "<h2>User List</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo $row['id'] . " - " . $row['username'] .
" <a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}
?>