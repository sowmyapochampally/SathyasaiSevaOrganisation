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
$name = mysqli_real_escape_string($conn,$_POST['lg_username']);
$pass = mysqli_real_escape_string($conn,$_POST['lg_password']); 
      
   $sql = "SELECT username,password FROM admin WHERE username = '".$name."' and password = '".$pass."'";
   $result = mysqli_query($conn,$sql);
       $count = mysqli_num_rows($result);
      
      if($count == 1) 
      {
            echo '<script>alert("review your answer")</script>';
            header('Location: http://localhost:8081/SSSSO/sathyasai/serviceform.html', true);
      }
      else 
      {
         $error = "Your Login Name or Password is invalid";
         echo $error;
         header('Location: http://localhost:8081/SSSSO/sathyasai/login.html', true);
      }
?>