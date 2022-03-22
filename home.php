<?php
$connect = mysqli_connect("localhost","root","","BlogProjectDB") or die("ERROR: Couldn't connect".mysqli_connect_error());

$stmt = "SELECT * FROM posts;";
$query = mysqli_query($connect, $stmt);

$query = $connect->prepare($stmt);
$query->execute();
$query->bind_result($post_id, $heading, $description, $date, $image_path, $content);
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
        <h2>Szösszenetek Evelin életéből</h2>
    </div>

    <script id="replaceWithNavBar" src="nav.js"></script>


    <div class="row">
        <div class="leftcolumn">
            <?php  while($query->fetch()): ?>
            <div class="card">
                <h2><?php echo $heading ?></h2>
                <h5><?php echo "$description, $date"?></h5>
                <img class="postimage" src="<?php echo $image_path?>">
                <p><?php echo $content ?></p>
            </div>
            <?php endwhile?>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Rólam :)</h2>
                <img style="height: 200px; object-position: left" src="./gallery/me.jpeg">
                <img style="height: 200px; object-position: left" src="./gallery/me2.jpg">
                <p>Egy fiatal lány Vajdaságból, akit érdekel az informatika világa, és akivel mindig történik valami.
                    <a class="link" style="padding: 0;margin: 0" href="aboutMe.php">
                        <u>Katt továbbiakért :)</u>
                    </a>
                </p>
            </div>
            <div class="card">
                <h3>Felkapottak</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3>Kövess be</h3>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h3>Szeretnéd felvenni velem a kapcsolatot?</h3>
                <p><a
                        class="link" style="padding: 0; margin: 0"
                        href="contact.php">
                    <u>Itt megteheted</u>
                </a></p>
            </div>
        </div>
    </div>

    <div class="footer">
        <h3>Keress meg ezeken a platformokon:</h3><br>
        <ul class="social">
            <li style="list-style: none"><a class="css-is-deranged" href="https://github.com/tothe04">GitHub</a></li>
            <li style="list-style: none"><a class="css-is-deranged" href="https://www.instagram.com/evelintoth01/">Instagram</a></li>
            <li style="list-style: none"><a class="css-is-deranged" href="_INSERT_GOOGLE+_URL_HERE_">Google+</a></li>
        </ul>
    </div>


</body>
</html>