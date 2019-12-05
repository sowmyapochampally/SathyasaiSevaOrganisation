<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sathyasai";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$activityname = mysqli_real_escape_string($conn, $_POST['Name']);
$date = mysqli_real_escape_string($conn,date('Y-m-d',$_POST['servdate']));
$description = mysqli_real_escape_string($conn, $_POST['Description']);
$samithi = mysqli_real_escape_string($conn, $_POST['unit']);
$mail = mysqli_real_escape_string($conn, $_POST['mail']);
$wing = mysqli_real_escape_string($conn, $_POST['wing']);
$place = mysqli_real_escape_string($conn, $_POST['place']);
$nopeople = mysqli_real_escape_string($conn, $_POST['count']);

$sql = "INSERT INTO `serviceinfo` (`activityname`,`date`,`description`,`samithi`,`mail`,`wing`,`place`,`nopeople`) VALUES ('".$activityname."','".$date."','".$description."','".$samithi."','".$mail."','".$wing."','".$place."','".$nopeople."')";
if (!mysqli_query($conn,$sql)) 
{
  die('Error: ' . mysqli_error($conn));
}
echo "1 record added";
header('Location: http://localhost:8081/SSSSO/sathyasai/serviceactiv.html', true);

mysqli_close($conn);
?>
