<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <form action="login.php" method="POST">
            <h2>LOGIN</h2>
            <?php
               if (isset($_GET['error'])) { ?>
               <p class ="error"><?php echo $_GET['error']; ?></p>
                 <?php } ?>
            <label>User Name:</label><input type="text" name="uname" placeholder="User Name"><br>
            <label>Password:</label><input type="password" name="uname" placeholder="User Name"><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
