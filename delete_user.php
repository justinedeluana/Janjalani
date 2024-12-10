<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Delete User - Website ni Deluana</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="delete-user.css">
</head>
<body>
    <div content="content">
        <div id="content">
            <h2>Deleting Record..</h2>
            <?php
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];
            } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
                $id = $_POST['id'];
            } else {
                echo '<p>Invalid ID. Cannot proceed with deletion.</p>';
                exit();
            }
            require('mysqli_connect.php');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['sure'] == 'Yes') {
                    $q = "DELETE FROM users WHERE user_id=$id LIMIT 1";
                    $result = @mysqli_query($dbcon, $q);

                    if (mysqli_affected_rows($dbcon) == 1) {
                        echo '<p>The user has been deleted successfully.</p>';
                        echo '<a class="buttones" href ="registration-viewer.php">Back to Registration Viewer</a>';
                    } else {
                        echo '<p>User could not be deleted, reason unknown.</p>';
                    }
                } else {
                    echo '<p>Deletion canceled.</p>';
                    echo '<p><a href="registration-viewer.php">Go back to the user list</a></p>';
                }
            } else {
                $q = "SELECT CONCAT(lname, ', ', fname) FROM users WHERE user_id=$id";
                $result = @mysqli_query($dbcon, $q);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    echo "<h3>Are you sure you want to delete $row[0]?</h3>";
                    echo '<form action="delete_user.php" method="post">
                            <input type="radio" name="sure" value="Yes"> Yes
                            <input type="radio" name="sure" value="No" checked="checked"> No
                            <input type="submit" name="submit" value="Submit">
                            <input type="hidden" name="id" value="' . $id . '">
                          </form>';
                } else {
                    echo '<h3>Invalid ID. Who are you?</h3>';
                }
            }
            mysqli_close($dbcon);
            ?>
        </div>
    </div>
</body>
</html>