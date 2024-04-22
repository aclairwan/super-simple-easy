<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost";
$username = "username"; // ชื่อผู้ใช้ของฐานข้อมูล
$password = "password"; // รหัสผ่านของฐานข้อมูล
$dbname = "myDB"; // ชื่อฐานข้อมูล

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม Sign Up
$username = $_POST['username'];
$password = $_POST['password'];

// เพิ่มข้อมูลใหม่ลงในตาราง users
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
