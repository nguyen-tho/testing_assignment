<?php

$conn=mysqli_connect("localhost", "root", "", "dienthoai");

	mysqli_select_db($conn, "dienthoai") or die("Cannot connect to the database");
	
?>
<?php
// function connectDb()
// {
//     $server = "localhost";
//     $user = "root";
//     $password = "";
//     $db = "dienthoai";
//     $conn = new mysqli($server, $user, $password, $db);
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     return $conn;
// }
if (!function_exists('mysqli_result')) {
	function mysqli_result($res, $row, $field=0) {
	  $res->data_seek($row);
	  $datarow = $res->fetch_array();
	  return $datarow[$field];
	}
  }
?>