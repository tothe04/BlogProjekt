<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog : Contact</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
<script id="replaceWithNavBar" src="nav.js"></script>
    <br><br>

    <div class="card">
        <h2>Contact</h2>
        <form class="form" style="text-align: left">

            <label class="element" for="user">Felhasznalonev: </label>
            <input type="text" name="username" id="user"><br><br>

            <label class="element" for="mail">Email:</label>
            <input type="email" name="email" id="mail"><br><br>

            <label class="element" for="contact">Miert szeretned felvenni velem a kapcsolatot?:</label>
            <textarea class="element" style="margin-left: 15px" name="reason" id="contact"></textarea><br>

            <input class="button" type="submit" value="send">
        </form>
    </div>

</body>
</html>