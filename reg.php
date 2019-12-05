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

$name = mysqli_real_escape_string($conn, $_POST['reg_fullname']);
$username = mysqli_real_escape_string($conn, $_POST['reg_username']);
$password = mysqli_real_escape_string($conn, $_POST['reg_password']);
$confirmpass = mysqli_real_escape_string($conn, $_POST['reg_password_confirm']);
$mobile = mysqli_real_escape_string($conn, $_POST['reg_mobile']);
$email = mysqli_real_escape_string($conn, $_POST['reg_email']);
$gender = mysqli_real_escape_string($conn, $_POST['reg_gender']);

$sql = "INSERT INTO `admin` (`name`,`username`,`password`,`confirmpassword`,`mobile`,`email`,`gender`) VALUES ('".$name."','".$username."','".$password."','".$confirmpass."','".$mobile."','".$email."','".$gender."')";
if (!mysqli_query($conn,$sql)) 
{
  die('Error: ' . mysqli_error($conn));
}
echo "1 record added";
header('Location: http://localhost:8081/SSSSO/sathyasai/index.html', true);

mysqli_close($conn);
?>
