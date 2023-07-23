<?php
    require "db.php";
    require "auth.php";
?>

<?php
    if ($conn->connect_error) {
        die("connection failed" + $conn->connect_error);
    } else {
        // echo "db connected";
        require "dashboard.html";
    }  
?>






<!-- this is the first version -->
<?php
    // $email = $_SESSION["email"];
    // $get_name = "SELECT name FROM `user2` WHERE email='$email'";

    // $result = $conn->query($get_name);

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     $user_name = $row["name"];
    //     echo "sup " . $user_name;
    // } else {
    //     echo "error, no user name found";
    // }
?>
