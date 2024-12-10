<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Edit Users - Website ni Justine</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="edit-user.css">
</head>
<body>
<?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
    } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        echo '<p>Invalid ID. Cannot proceed with editing.</p>';
    exit();
}

    require('mysqli_connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
        $lname = mysqli_real_escape_string($dbcon, trim($_POST['lname']));

        $q = "UPDATE users SET fname='$fname', lname='$lname' WHERE user_id=$id LIMIT 1";
        $result = @mysqli_query($dbcon, $q);

        if (mysqli_affected_rows($dbcon) == 1) {
        echo '<p>The user information has been updated successfully.</p>';
        echo '<a class = "buttones" href="registration-viewer.php">Back To Registration Viewer</a>';
        } else {
            echo '<p>User information could not be updated, reason unknown.</p>';
            echo '<a class = "buttones" href="registration-viewer.php">Back To Registration Viewer</a>';
    }
    } else {
        $q = "SELECT fname, lname FROM users WHERE user_id=$id";
        $result = @mysqli_query($dbcon, $q);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo '<form action="edit_user.php" method="post">
                    <p>First Name: <input type="text" name="fname" value="' . htmlspecialchars($row['fname']) . '"></p>
                    <p>Last Name: <input type="text" name="lname" value="' . htmlspecialchars($row['lname']) . '"></p>
                    <input type="submit" name="submit" value="Update">
                    <input type="hidden" name="id" value="' . $id . '">
                </form>';
        }else {
            echo '<h3>Invalid ID. Who are you?</h3>';
    }
}
mysqli_close($dbcon);
?>
</body>
</html>