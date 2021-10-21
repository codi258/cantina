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
    <div>
        <form method="post">
            <div class="d1">
                <div class="n1">
                    <p>nom:</p>
                </div>
                <div>
                    <input type="text" id="nom" maxlength="40" required>
                </div>
            </div>
            <div class="d1">
                <div class="n1">
                    <p>correu:</p>
                </div>
                <div>
                    <input type="text" id="nom" maxlength="40" required>
                </div>
            </div>
            <div class="d1">
                <div class="n1">
                    <p>Telèfon</p>
                </div>
                <div>
                    <input type="text" id="nom" maxlength="30" required>
                </div>
            </div>

        </form>
    </div>

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