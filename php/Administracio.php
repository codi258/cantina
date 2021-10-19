<html>
    <head>
        <title>Inici</title>
        <link rel="stylesheet" href="/css/elcss.css">
    </head>
    <body>
    <header>
        <?php
             include 'Header.php';
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
        include 'Footer.php'

        ?>
    </footer>
    </body>
</html>