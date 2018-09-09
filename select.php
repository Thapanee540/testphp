
<?php
include("conn/conn.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userid: " . $row["Userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." " . $row["phoneNumber"]." " . $row["email"]." " . $row["gender"]." " . $row["date"]." " . $row["running"]." " . $row["runOld"]." " . $row["payRun"]." " . $row["size"]." " . $row["group_run"]." " . $row["country"]. "<br>";
    }
} else {
    echo "0 results";
}


?>