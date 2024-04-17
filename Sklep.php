<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="widht=device-widht">
<link rel="stylesheet" href=Sklep.css>
<title>SKLEP</title>
</head>

<body>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Sklep_int";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Połączenie nie powiodło się" . $conn->connect_error);
    } 
    $conn->close();
?>

    <header class="flex-container topnav">
        <img src="img/logo.jpg" alt="logo" id="logo" >
        <form action="Sklep.php" method="get">
        <input type="text" name="search" id="search" placeholder="Wyszukaj produkt">
        <input type="submit" value="Szukaj">
        </form>


        <div style="text-align: center; margin-top: 2cqmin;">
        <form action="Wysylania.php" method="POST">

            <textarea name="title" placeholder="Nazwa" required></textarea><br>
            <br>
            <input type="Number" name="price" placeholder="Cena" min="1" required step='.01'><br>
            <br>
            <input  name="description" placeholder="Opis"  required><br>
            <br>
           
            <button type="submit">Dodaj</button>
        </form>
    </div>

        <a href="Koszyk.php" ><img src="img/koszyk.png" alt="koszyk" id="Koszyk" ></a>
    </header>

    <main class='flex-container-wrap'>

    
        <?php
            include "display-products.php" ;

        ?>

    </main>
 
 </body>
</html>

