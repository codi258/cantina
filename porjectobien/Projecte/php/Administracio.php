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

    <h1>Pantalla administració</h1>
    <form action="inicio.php">
        <br><br>
        <input type="submit" name="boton" value="Inici">
    </form>
    <form action="historial.php">
        <br><br>
        <input type="submit" name="boton" value="Historial">
    </form>
    <footer>
        <?php
        require_once("Footer.php")

        ?>
    </footer>
    </body>
</html>