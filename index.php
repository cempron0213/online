<?php
include 'db.php';

$result = $conn->query("SELECT * FROM citizen");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Citizen</title>
</head>

<body>
    <h2>Citizen List</h2>

    <a href="create.php">Add New Account </a>
    
    <table border ="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Actions</th>        
        </tr>

                <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </table>

</body>

</html>