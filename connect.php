<?php

$conn=mysqli_connect("localhost", "root", "", "dairy_shop");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>