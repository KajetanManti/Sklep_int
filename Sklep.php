<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="widht=device-widht">
<link rel="stylesheet" href=Sklep.css>
<title>SKLEP</title>
</head>
<body>
    <header class="flex-container topnav">
        <img src="img/logo.jpg" alt="logo" id="logo" >
        <form action="Sklep.php" method="get">
        <input type="text" name="search" id="search" placeholder="Wyszukaj produkt">
        <input type="submit" value="Szukaj">
        </form>

        <a href="Koszyk.php" ><img src="img/koszyk.png" alt="koszyk" id="Koszyk" ></a>
    </header>

    <main class='flex-container-wrap'>

    
        <?php
            include "display-products.php" ;

        ?>

    </main>
 
</body>
</html>