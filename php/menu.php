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
    // Get the contents of the JSON file
    $bocatas = file_get_contents("../jsons/menuMati.json");
    // Convert to array
    $arrayBocatas = json_decode($bocatas, true);
    //var_dump($arrayBocatas); // print array


    foreach ($arrayBocatas as $key => $value){
        $nom = $arrayBocatas[$key]["nom"];
        $preu = $arrayBocatas[$key]["preu"];
        $ruta = $arrayBocatas[$key]["ruta"];


        echo "<h1> $nom </h1>";
        echo "<h2> $preu </h2>";
        echo "<img src=$ruta/>";
        echo "<hr>";
    }
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