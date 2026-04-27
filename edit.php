<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM citizen WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];


$sql = "UPDATE citizen
        SET name='$name', address='$address', email='$email'
        WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
}
?>

<h2>Edit Citizen</h2>

<form method="POST">

    Name:
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <br><br>
    
    Address:
    <input type="text" name="address" value="<?php echo $row['address']; ?>">
    <br><br>
    
    Email:
    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <br><br>

    <button type="submit" name="update">Update</button>

</form>