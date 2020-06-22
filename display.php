<?php
include "connection.php";
$sq = "SELECT description FROM items";
$result = $conn->query($sq);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Chore-->" . $row["description"]."<br>";
  }
} 
else {
  echo "0 results";
}
?>