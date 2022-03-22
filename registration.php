<!DOCTYPE html>
<html lang="hu-HU">
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
        <h2>Regisztráció</h2>
        <form action="uploadUserData.php" class="form" style="text-align: left" method="get">
            <label class="element" for="name">Név: </label>
            <input type="text" name="name" id="name"><br><br>

            <label class="element" for="birthday">Születési dátum:</label>
            <input type="date" name="birthday" id="birthday"><br><br>

            <label class="element" for="male">Férfi:</label>
            <input type="radio" name="gender" id="male" value="male"><br><br>
            <label class="element" for="female">Nő:</label>
            <input type="radio" name="gender" id="female" value="female"><br><br>

            <label class="element" for="mail">Email:</label>
            <input type="email" name="email" id="mail"><br><br>

            <label class="element" for="user">Felhasználónév: </label>
            <input type="text" name="username" id="user"><br><br>

            <label class="element" for="pwd">Jelszó</label>
            <input type="password" name="password" id="pwd"><br><br>

            <input class="button" type="submit" value="küldés">
            <input class="button" type="reset" value="törlés">
        </form>
    </div>


</body>
</html>