<?php
include 'db.php';

// Fetch all users from the database
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Users List</title>
</head>

<body>
    <h2>Users List</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Image</th>
            <th>Action</th>
        </tr>
        <?php if (!empty($users)) : ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <img src="uploads/<?php echo $user['profpicture']; ?>" width="100">
                    </td>
                    <td>
                        <a href="update.php?id=<?php echo $user['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5">No users found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>