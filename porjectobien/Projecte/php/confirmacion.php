<html>
<head>
    <title>Recibo</title>

</head>
<body>
<header>
    <?php
    require_once("Header.php");
    ?>
</header>
<h1>Tu pedido</h1>


<form action="comandav.php">
    <br/>
    <input type="submit" name="button" value="Comanda">
</form>
<?php
echo "Confimación";
?>
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







