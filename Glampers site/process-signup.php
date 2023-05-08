<?php

if (empty($_POST["Uname"])) {
    die("User name is required");
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}
if ($_POST["password"] !== $_POST["Password_confirmation"]) {
    die("Passwords must match");
}

$mysqli = require __DIR__ . "/Database.php";

$sql = "INSERT INTO user (Uname, email, password)
        VALUES (?,?,?)";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
    die("SQL error:" . $mysqli->error);
}
$stmt->bind_param(
    "sss",
    $_POST["Uname"],
    $_POST["email"],
    $password
);
if ($stmt->execute()) {

    echo "Signup Success";
} else {
    die($mysqli->error . "" . $mysqli->errno);
}

?>

