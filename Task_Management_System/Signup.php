<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yenta-fied</title>
</head>

<body>
    <h2> Sign Up </h2>
    <h5> Your tasks. Your way. Yenta makes it easy. </h5>
    <form action="Signup_process.php" method="post" enctype="multipart/form-data">

    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>
    <label for="profile_image">Profile Image:</label>
    <input type="file" name="profile_image" required><br><br>

    <input type="submit" value="Sign Up">
    </form>
</body>

</html>