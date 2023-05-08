<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Glampers-Contact Form </title>

    <title>contactus</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="/js/validation.js" defer > </script>

    </a>

    <style>
        h2 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        fieldset {
            text-align: center;
        }

        form {
            width: 75%;
            margin: 0 auto 0 auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            margin-bottom: .25em;
            padding: .25em;
            font-size: 1em;
        }

        input[type="submit"] {
            font-size: 1.25em;

        }

        legend {
            font-weight: 700;
        }

    </style>
</head>

<body>
    <p>
        Many campgrounds offer a variety of camping amenities. Stargazing is one
        of the best things to do while Glamping. Some of the best known
        and most visited campgrounds for star gazers are those by lakes and rivers.
        Camping sites can be found in forests, lakes, streams, creeks, and other bodies of water. 
        There are many activities to be done at most sites, including tubing, fishing, hiking, and hunting.
        <br>
        <br>
        Ready to give glamping a try? Please feel free to sign up to join our club.
        We can help you plan your glamping getaway.We also send out information on diffrent
        campsites upon request.




    </p>
    <header>
        <h2>Want to Join US?</h2>
        <h3>Feel free to sign up.</h3>
    </header>

    <form action="process-signup.php" method="POST" id="Signup">
        <fieldset>
            <legend>Sign Up</legend><br><br>
            <label>User name: <input type="text" name="Uname" size="15" maxlength="30"></label>
            <label>Password:<input type="text" name="password" size="8" maxlength="12"></label>
            <label>Email: <input type="text" name="email" size="25" maxlength="40"></label>
        </fieldset>
        <input type="submit" value="Sign up">
        <br>
        <form action="questionnaire.php" method="=post">
            <fieldset>
                <legend>You've got questions?</legend>
                <label>We've got answers. Send us a message.<br><textarea name="Questions" rows="4" cols="40"></textarea></label><br><br>
                Ready to book your Glamping adventure?<br>
                <label>First name: <input type="text" name="First-name" size="15" maxlength="30"></label>
                <label>Email: <input type="text" name="email" size="25" maxlength="40"></label>
                <label>Yes I'm Ready<input type="checkbox" name="I'm ready"></label>
                <label>Need more info<input type="checkbox" name="Need Info"></label>
                <br><br>

            </fieldset>
            <input type="submit" value="Send email message">
        </form>
        <nav>
            <nav id="nav_menu">
                <ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php" class="current">Contact Us</a>
                    <li><a href="https://americanglampingassociation.net" target="_blank">American Camping association</a></li>
                </ul>
            </nav>
            <footer>
                <p>CIST 2351 Spring 2023, Glampers, Krystal Greene</p>
            </footer>



</html>