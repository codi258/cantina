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


    <form id='mati'>

    <?php
    $bocatasMati = file_get_contents("../jsons/menuMati.json");
    $arrayBocatasMati = json_decode($bocatasMati, true);
    foreach ($arrayBocatasMati as $key => $value){
        $nom = $arrayBocatasMati[$key]["nom"];
        $preu = $arrayBocatasMati[$key]["preu"];
        $ruta = $arrayBocatasMati[$key]["ruta"];

        echo"<div><h1> $nom </h1>
                <h2> $preu </h2>
                <img src=$ruta width='200px'/>
                <hr></div>
            ";
    }

    ?>

    </form>
    <hr><hr><hr>

    <form id='tarda'>
    <?php

    $bocatasTarda = file_get_contents("../jsons/menuTarda.json");
    $arrayBocatasTarda = json_decode($bocatasTarda, true);


    echo"<h1>aqui empieza el menu de tardes</h1>";


    foreach ($arrayBocatasTarda as $key => $value){
        $nom = $arrayBocatasTarda[$key]["nom"];
        $preu = $arrayBocatasTarda[$key]["preu"];
        $ruta = $arrayBocatasTarda[$key]["ruta"];

        echo"<div><h1> $nom </h1>
                <h2> $preu </h2>
                <img src=$ruta width='200px'/>
                <hr></div>
            ";
    }

    ?>
    </form>



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