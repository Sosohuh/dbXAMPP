<?php
include "db_conn.php";

    if (isset($_POST['uname']) && isset($_POST['uname'])) {

        function validate($data) {
            $data = trim ($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if (empty($uname)) {
            header("Location: index.php?error=User Name iyafuneka sphatho");
            exit();
        }else if (empty($pass)) {
            header("Location: index.php?error=Password iyafuneka sphatho");
            exit();
        }else {
            $sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                echo "OLAAA!!"
            }
        }

    }else {
        header("Location: index.php?error");
        exit();
    }
  
?>