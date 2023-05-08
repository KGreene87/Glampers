<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Glampers</title>
</head>


<body>
    <?php
    $_SESSION['Username'] = "KGreene";
    echo $_SESSION['Username'];
    ?>
</body>

</html>