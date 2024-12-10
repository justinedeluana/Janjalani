<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration-viewer.css">
    <title>Register View</title>
</head>
<body>
<header>
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
    </header>
<main>
    <h2 style="text-align: center;">Registered Users</h2>
    <p>
        <?php
            require ("mysqli_connect.php");
            $q = "SELECT user_id, fname, lname, email, date_format(registration_date, '%M %D, %Y') As regdat from users
            ORDER BY user_id ASC";
            $result = mysqli_query($dbcon, $q);
            if($result){
                echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Registration Date</th>
                    <th>Email Address</th>
                    <th>Action</th>
                </tr>";
                while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tr>
                        <td>".$row['fname']." ".$row['lname']."</td>
                        <td>".$row['regdat']."</td>
                        <td>".$row['email']."</td>
                        <td><a href='edit_user.php?id=".$row['user_id']."'>edit</a></td>
                        <td><a href='delete_user.php?id=".$row['user_id']."'>delete</a></td>
                    </tr>";
                }
                echo "</table>";
            } else{
                echo "<p class='error'>The current registered users cannot be retrieved.</p>";
            }
            mysqli_close($dbcon);
        ?>
    </p>
</main>
</body>
<?php include 'footer.php' ?>
</html>