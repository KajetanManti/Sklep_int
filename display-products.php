<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sklep_int";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Połączenie nie powiodło się" . $conn->connect_error);
    } 
    
    $query = "SELECT `Nazwa`, `Cena` FROM `produkt`";

    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo"<div class='card'>";
            echo "<h3>".$row["Nazwa"]."</h3>";
            echo "<p>".$row["Cena"]."</p>";

            echo "</div>";
        }
    }

    $conn->close();
?>
