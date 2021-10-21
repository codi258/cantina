<html>
<head>
    <title>Recibo</title>

</head>
<body>
<header>
    <?php
     include 'Header.php';
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
<?php
    echo"<br>";
if(isset($_COOKIE["comanda"])){
    echo"La cookie ya existe";
}else{
    echo"Si no existe, la creamos";
    //Se crea cookie con duracion de
    setcookie("comanda", 54321); // time()+10,"/" esto cuando dejes de hacer pruebas lo pones de nuevo dentro del parentesis
}
?>
<footer>
    <?php
    include 'Footer.php'

    ?>

</footer>
</body>
</html>







