
<!--//$connect = mysql_connect("localhost","root","") or die ("Couldn't connect!");-->
<!--//mysql_select_db("BlogProjectDB") or die ("Couldn't find db");-->

<?php

//$link = mysqli_connect('localhost', '	LAPTOP-7SJGUJ93$', '');
//if (!$link) {
//    die('Could not connect: ' . mysqli_error());
//}
//echo 'Connected successfully';
//mysqli_close($link);

//$connect = mysqli_connect("localhost","root","") or die ("Couldn't connect!");
//mysqli_select_db("BlogProjectDB") or die ("Couldn't find db");

//$servername = "localhost";
//$username = "LAPTOP-7SJGUJ93$";
//$password = "";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog : Homepage</title>

    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <div class="header">
        <h2>Blog Name</h2>
    </div>

    <script id="replaceWithNavBar" src="nav.js"></script>

<!--    <nav class="navbar">-->
<!--        <div class="logoPos">-->
<!--            <img style="height: 60px; width: auto" src="img/logoS.png" class="logo" alt="">-->
<!--        </div>-->
<!--        <ul class="links-container">-->
<!--            <li class="link-item"><a href="home.php" class="link">Főoldal</a></li>-->
<!--            <li class="link-item"><a href="about.html" class="link">A blogról</a></li>-->
<!--            <li class="link-item"><a href="aboutMe.html" class="link">Rólam</a></li>-->
<!--            <li class="link-item"><a href="login.html" style="background: #768b76" class="link">Bejelentkezés</a></li>-->
<!--        </ul>-->
<!--    </nav>-->


    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2021</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2021</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2><a class="link" style="padding: 0;margin: 0"
                        href="aboutMe.php">
                    <u>About Me</u>
                </a></h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me..</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h3><a
                        class="link" style="padding: 0; margin: 0"
                        href="contact.php">
                    <u>Contact Me</u>
                </a></h3>
            </div>
        </div>
    </div>

    <div class="footer">
        <h3>Say hi to me on these social networks:</h3><br>
        <ul class="social">
            <li style="list-style: none"><a class="css-is-deranged" href="https://github.com/tothe04">GitHub</a></li>
            <li style="list-style: none"><a class="css-is-deranged" href="https://www.instagram.com/evelintoth01/">Instagram</a></li>
            <li style="list-style: none"><a class="css-is-deranged" href="_INSERT_GOOGLE+_URL_HERE_">Google+</a></li>
        </ul>
    </div>


</body>
</html>