<?php
    // Start the session to access session variables
    session_start();

    // Check if the user is logged in and the user's name is stored in the session
    if (isset($_SESSION['user_name'])) {
        // Return the user's name as a JSON response
        header('Content-Type: application/json');
        echo json_encode(['name' => $_SESSION['user_name']]);
    } else {
        // Return an error message as a JSON response if the user is not logged in
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: application/json');
        echo json_encode(['error' => 'User not logged in']);
    }
?>