<?php
$conn = new mysqli("mysql", "root", "root", "user");

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
  exit();
}
