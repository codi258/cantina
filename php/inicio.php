<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="/css/elcss.css">
    </head>
    <body class="inicio">
        <header>
            <?php
            include 'Header.php';
            ?>
        </header>
        <div>
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
        </div>
        <footer>
            <?php
            include 'Footer.php'
            ?>
        </footer>
    </body>
</html>