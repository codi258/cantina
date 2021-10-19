<html>
<head>
    <title>Inici</title>
    <link rel="stylesheet" href="elcss.css">
</head>
<body>
    <header>
        <?php
            require_once("Header.php");
        ?>
    </header>
    <?php
        require_once("Header.php");
    ?>
    <h1>Menu</h1>
    <form action="comandav.php">
        <br><br>
        <input type="submit" name="boton" value="Validació comanda">
    </form>
    <form action="inicio.php">
        <br><br>
        <input type="submit" name="boton" value="Inicio">
    </form>
    <footer>
        <?php
        require_once("Footer.php")
        ?>
    </footer>
</body>
</html>