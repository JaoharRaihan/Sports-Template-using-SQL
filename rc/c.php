<?php
// Connection parameters for MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection to MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the database for the Bangladesh cricket team match results
$sql = "SELECT * FROM `bd_cricket_team_match_results_odi`";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "COL1: " . $row["COL1"] . " - Venue: " . $row["venue"] . " - Opponent: " . $row["opponent"] . " - Result: " . $row["result"] . "<br>";
  }
} else {
  echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
