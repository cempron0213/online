<?php
include 'db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM citizen WHERE id=$id");

header("Location: index.php");

?>