<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST["userID"];
    $password = $_POST["password"];

    // **VERY INSECURE!  NEVER DO THIS IN REAL LIFE!**
    $data = "User ID: " . $userID . ", Password: " . $password . PHP_EOL;
    file_put_contents("login_data.txt", $data, FILE_APPEND);

    echo "Data saved!  Check login_data.txt on the server.";
}
?>
