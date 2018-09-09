

<?php

include("conn/conn.php");
include("conn/toggle.css");

$firstname = $lastname = $phoneNumber = $email = $gender = "";
$date = $running = $runOld = $payRun = $size = "";
$group = $country = $User_ID1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $phoneNumber = test_input($_POST["phoneNumber"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $date = test_input($_POST["date"]);
  $running = test_input($_POST["running"]);
  $runOld = test_input($_POST["runOld"]);
  $payRun = test_input($_POST["payRun"]);
  $size = test_input($_POST["size"]);
  $group = test_input($_POST["group"]);
  $country = test_input($_POST["country"]);
  // $User_ID1 = test_input($_POST["User_ID"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $phoneNumber;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $date;
echo "<br>";
echo $running;
echo "<br>";
echo $runOld;
echo "<br>";
echo $payRun;
echo "<br>";
echo $size;
echo "<br>";
echo $group;
echo "<br>";
echo $country;
echo "<br>";
// echo $User_ID1;

//insert data
$sql = "INSERT INTO userprofile (firstname ,lastname,phoneNumber,email,gender,date,running,runOld, payRun, size, group_run, country)
VALUES ('$firstname', '$lastname',  '$phoneNumber',  '$email',  '$gender', '$date', '$running', '$runOld', '$payRun', '$size','$group', '$country')";

echo "<br>";

if (mysqli_query($conn, $sql)) { //ถ้า insert ได้จะเข้า new rec...
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>