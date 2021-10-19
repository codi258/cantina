<html>
<head>
    <title>Comanda</title>
    <link rel="stylesheet" href="/css/elcss.css">
</head>
<body>
    <header>
        <?php
            include 'Header.php';
        ?>
    </header>

<h1>Comanda</h1>

<form action="confirmacion.php">
    <br/>
    <input type="submit" name="button" value="Comprar">
</form>
<form action="menu.php">
    <br/>
    <input type="submit" name="button" value="Menú">
</form>
    <footer>
        <?php
        include 'Footer.php'

        ?>
    </footer>
</body>
</html>