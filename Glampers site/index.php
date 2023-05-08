<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User_Name']))
?>

<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    h2 {
        text-align: center;
    }

    h3 {
        text-align: left;
    }

    h4 {
        text-align: center;
    }

    section {
        text-align: center;

    }

   
</style>


<header>
    <h1>Welcome Glampers</h1>
    <h2>Your gateway to the world of Glamping!</h2>
</header>
<section>
    <h1><img src="https://cdn.apartmenttherapy.info/image/upload/v1558595689/at/archive/bbe6847bd76faa023399fd10c537fedc0229cc70.jpg" alt="glamping " width="500" height="400" class="center"></h1>
</section>

<body>
    <p>Welcome to Glampers, prepare to be initiated into the Glamorous form of camping we call
        Glamping. Glamping is designed for people who want to experience the great outdoors
        but can't bear the thought of having only the bare necessities with them. Here we have
        some examples of the types of Glamping tents, so you can get a feel of what better suits
        your needs.
        <br>
        <br>
        If you are looking for hotel luxury alongside adventure camping, glamorous camping is a perfect choice for you.
        You don’t need to have any special gear, be fit, or have any outdoors experience. Glamping is for everyone.
        It is great for family glamping trips, glamping with friends or romantic glamping for couples.
        <br>
        <br>
        There are many wonderful and unique glamping experiences all over the world.
        We hope you find some useful information here and let us help guide you on
        your next glamping experience. We are blog made for Glamper lovers by Glamper lovers.





    </p>

    <form action="login.php" method="post">
        <h3> LOGIN</h3>
        <?php if (isset($_GET['error'])) { ?>
            <P class="error"> <?php echo $_GET['error']; ?></P>
        <?php } ?>
        <label>User name</label>
        <input type="text" name="Uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="text" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
    <br>
    <br>







    <nav id="nav_menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a>
            <li><a href="https://www.discoverglamping.com" target="_blank">Glamping Destinations</a></li>
        </ul>

        <footer>
            <p>CIST 2351 Spring 2023, Glampers, Krystal Greene</p>
        </footer>



        <?php

        $_COOKIE = "GlampCookie";
        $time = time();
        setcookie($cookie, $time);
        print "Current Time: $time";
        print "</br>";
        print "Previous Visit Time: $_COOKIE[Glampcookie]";
        ?>
        <?php echo $_SESSION['User_Name']; ?></h1>
        <a href="logout.php">Logout</a>





</body>

</html>