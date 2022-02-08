<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog : Registration</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
<script id="replaceWithNavBar" src="nav.js"></script>
    <br><br>

    <div class="card">
        <h2>Registration</h2>
        <form class="form" style="text-align: left">
            <label class="element" for="name">Nev: </label>
            <input type="text" name="name" id="name"><br><br>

            <label class="element" for="birthday">Szul datum:</label>
            <input type="date" name="birthday" id="birthday"><br><br>

            <label class="element" for="male">Ferfi:</label>
            <input type="radio" name="gender" id="male"><br><br>
            <label class="element" for="female">No:</label>
            <input type="radio" name="gender" id="female"><br><br>

            <label class="element" for="phone">Telefonszam:</label>
            <input type="tel" name="phone" id="phone"><br><br>

            <label class="element" for="mail">Email:</label>
            <input type="email" name="email" id="mail"><br><br>

            <label class="element" for="user">Felhasznalonev: </label>
            <input type="text" name="username" id="user"><br><br>

            <label class="element" for="pwd">Jelszo</label>
            <input type="password" name="password" id="pwd"><br><br>

            <input class="button" type="submit" value="send">
            <input class="button" type="reset" value="reset">
        </form>
    </div>


</body>
</html>