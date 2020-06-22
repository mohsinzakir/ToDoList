<?php
include "connection.php";
$sq = "SELECT description FROM items";
$result = $conn->query($sq);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Chore-->" . $row["description"];
     echo '
        <form name="X" action="thispage.php" method="POST">
             <input type="text" name="trekking">
             <input type="submit">
        </form>;
    ';

  }
} 
else {
  echo "0 results";
}
?>