<?php
require_once '../includes/db_connection.php';
$id = $_REQUEST['order_id'];
$query = "DELETE FROM orders WHERE order_id=$id";
$result = mysqli_query($con, $query) or die(mysqli_error());
header("Location: manage_orders.php");
?>    