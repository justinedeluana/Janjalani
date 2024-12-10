<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login - Website ni Deluana</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h2>Login</h2>
    <?php
    require ('mysqli_connect.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = array();
    
        if (empty($_POST['email'])) {
            $errors[] = "Please enter your email.";
        } else {
            $email = trim($_POST['email']);
        }
    
      
        if (empty($_POST['password'])) {
            $errors[] = "Please enter your password.";
        } else {
            $password = trim($_POST['password']);
        }
    
      
        if (empty($errors)) {
            $q = "SELECT user_id, password FROM users WHERE email = ?";
            $stmt = mysqli_prepare($dbcon, $q);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
    
    
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $user_id, $hashed_password);
                mysqli_stmt_fetch($stmt);
    
    
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['user_id'] = $user_id;
                    header("location: index.php");
                    exit();
                } else {
                    $errors[] = "Invalid email or password.";
                }
            } else {
                $errors[] = "Invalid email or password.";
            }
            mysqli_stmt_close($stmt);
        }
    
        mysqli_close($dbcon);
    }
    
    if (!empty($errors)) {
        echo '<h2>Error!</h2><p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) {
            echo " - $msg<br/>";
        }
        echo '</p>';
    }
    ?>

    <form action="login.php" method="post">
        <p>Email: <input type="email" name="email" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p><input type="submit" value="Login"></p>
    </form>
</body>
</html>