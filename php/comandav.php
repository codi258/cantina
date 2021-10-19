<html>
<head>
    <title>Comanda</title>
    <link rel="stylesheet" href="elcss.css">
</head>
<body>
    <header>
        <?php
            require_once("Header.php");
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
        require_once("Footer.php")

        ?>
    </footer>
</body>
</html>