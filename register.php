<?php
    require "db.php";
?>

<?php
    if ($conn->connect_error) {
        die("connection failed" + $conn->connect_error);
    } else {
        // echo "db connected";
        require "register.html";
    }

    if (isset($_REQUEST["email"])) {
        $user_name = $_POST["name"];
        $user_email = $_POST["email"];
        $user_password = $_POST["password"];

        $add_user = "INSERT INTO user2 (name, email, password)
        VALUES ('$user_name', '$user_email', '$user_password')";

        if ($conn->query($add_user) === TRUE) {
            echo "New record created successfully";
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
        } else {
            echo "Error: " . $add_user . "<br>" . $conn->error;
        }
    }

?>