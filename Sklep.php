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
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:1600zł<p>
        </div>
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:1200zł<p>
        </div>
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:1000zł<p>
        </div>
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:800zł<p>
        </div>
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:1020zł<p>
        </div>
        <div class='card'>
        <h3>Nazwa oferty</h3>
            <p>Cena:100zł<p>
        </div>
    </main>
 
</body>
</html>