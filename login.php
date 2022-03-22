<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog : Login</title>

  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/registration.css">

</head>
<body>
<script id="replaceWithNavBar" src="nav.js"></script>
    <br><br>

    <div class="card">
        <h2>Bejelentkezés</h2>
        <form class="form">
            <label class="element" for="user">Felhasználónév:</label>
            <?php
            if(isset($_COOKIE["userName"])){
                $userName = $_COOKIE["userName"];
                echo "<input username='username' id='user' type='text' value='$userName' required>";
            }else{
                echo '<input username="username" id="user" type="text" required>';
            }
            ?><br><br>

            <label class="element" for="pwd">Jelszó</label>
            <input type="password" name="password" id="pwd"><br><br>

            <input class="button"  type="submit" value="Bejelentkezés">

        </form>

        <p style="font-size: 15px">Nincs még fiókod?
            <a class="link" style="padding: 0;margin: 0"
               href="registration.php"><u>Regisztrálj</u></a></p>

    </div>

</body>
</html>