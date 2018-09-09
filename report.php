<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userid: " . $row["userid"]. " - Name: " . $row["name"]. " " . $row["email"]." " . $row["age"]." " . $row["address"]." " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

?>