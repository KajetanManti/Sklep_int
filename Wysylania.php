<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sklep_int";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Połączenie nie powiodło się" . $conn->connect_error);
} 



$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];



$sql = "INSERT INTO przepisy(Nazwa, Cena, Opis ) VALUES ('$title', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Przepis został dodany. :)";
} else { 
    echo"Coś poszło nie tak! :(";
}
$conn->close();

?>

