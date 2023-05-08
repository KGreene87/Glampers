<?php
session_start();
include "Database.php";

if (isset($_POST['Uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if (empty($uname)) {
    header("Location: index.php?error=Please enter User Name");
    exit();
} else if (empty($pass)) {
    header("Location: index.php?error=Please enter Password");
    exit();
}
$sql = sprintf(  "SELECT * FROM user
                WHERE email = '%s'",
    $mysqli->real_escape_string($_POST['email'])
);

$result = $mysqli->query($sql);

$user = $result->fetch_assoc();

if ($user) {
    if (password_verify($_POST["password"], $user["Password"])) {
        session_start();
        $_SESSION["user_id"] = $user["id"];

        header("Location:index.php");
        exit;
    }
}
?>
