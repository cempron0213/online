<?php
include 'db.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];


$sql = "INSERT INTO citizen (name, address, email)
        VALUES ('$name', '$address','$email')";

$conn->query($sql);

header("Location: index.php");
}
?>

<h2>Add Citizen</h2>

<form method="POST">
fffubb
    Name:
    <input type="text" name="name" required>
    <br><br>

    Address:
    <input type="text" name="address" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>
    
    <button type="submit" name="submit">Save</button>

</form>
