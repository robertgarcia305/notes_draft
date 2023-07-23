<!-- cd into the directory you want then add the below text -->
<!-- php -S localhost:4000 -->
<!-- the log in page will ask for email and password -->
<!-- the sign up page will ask for name email and password -->
<!-- on the dashboard page there will be a greeting and it tells you your name, also a log out button -->
<!-- there's going to be 2 sql tables, one for the users called user2 and one for the notes called notes2 linking to each user and their emails -->

<?php
    require "db.php";
?>

<?php
    session_start();
?>

<?php

    if ($conn->connect_error) {
        // maybe throw an error landing page like this one
        // require "error.html";
        die("there was an error connecting to server" + $conn->connect_error);
    } else {
        require "login.html";
    }

    if (isset($_REQUEST["email"])) {
        $user_email = $_POST["email"];
        $user_password = $_POST["password"];

        $check_user = "SELECT * FROM `user2` WHERE email='$user_email' AND password='$user_password'";
    
        $result = $conn->query($check_user);

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION["email"] = $user_email;
            header("location: dashboard.php");
            exit();
        } else {
            echo "<div class='container'>
            <p>there was an error logging in, please try again</p>
            </div>";
        }
    }

?>