<?php
// Delete record here...
require("connect.php");

$user_id = $_REQUEST['user_id'];

$query = "DELETE FROM user WHERE user_id = $user_id";
$result = mysqli_query($connection, $query);
header("Location: index.php");
?>