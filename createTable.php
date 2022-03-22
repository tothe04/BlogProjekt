<?php
$conn = mysqli_connect("localhost","root","","BlogProjectDB") or die("ERROR: Couldn't connect".mysqli_connect_error());

$query = "CREATE TABLE users(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	birthday DATE NOT NULL,
	gender VARCHAR(5),
	email VARCHAR(70) NOT NULL UNIQUE,
	username VARCHAR(40) NOT NULL,
    password VARCHAR(50) NOT NULL 
)";

if(mysqli_query($conn, $query)){
    echo "Sikerült a táblát létrehozni";
}else{
    echo "HIBA: ".mysqli_error($conn);
}

mysqli_close($conn);
?>