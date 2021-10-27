<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="elcss.css">
    </head>
    <body>
    <header>
        <?php
            require_once("Header.php");
        ?>
    </header>
    <h1>Inicio</h1>
    <p>Vendemos bocatas</p>
        <form action="menu.php">
            <br/>
            <input type="submit" name="button" value="Menú">
        </form>
        <form action="Administracio.php">
            <br/>
            <input type="submit" name="button" value="Admin">
        </form>
        <footer>
            <?php
                require_once("Footer.php")
            ?>
        </footer>
    </body>
</html>