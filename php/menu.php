<?php
    if(isset($_COOKIE["COMANDA"])){
        header('Location:error.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
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


    <form id='mati'>

    <?php
    $bocatasMati = file_get_contents("../json/menuMati.json");
    $arrayBocatasMati = json_decode($bocatasMati, true);
    foreach ($arrayBocatasMati as $key => $value){
        $id = $arrayBocatasMati[$key]["id"];
        $nom = $arrayBocatasMati[$key]["nom"];
        $preu = $arrayBocatasMati[$key]["preu"];
        $ruta = $arrayBocatasMati[$key]["ruta"];

        echo"<div id='$id'><h1> $nom </h1>
                <h2> $preu </h2>
                <img src=$ruta width='200px'/>
                <input type='button' value='-' class='treure'>           
                <input type='text' id=i$id value='0'>
                <input type='button' value='+' class='afegir'>
                <hr></div>
            ";
    }
    ?>

    </form>

    <form id='tarda'>
    <?php

    $bocatasTarda = file_get_contents("../json/menuTarda.json");
    $arrayBocatasTarda = json_decode($bocatasTarda, true);


    echo"<h1>aqui empieza el menu de tardes</h1>";


    foreach ($arrayBocatasTarda as $key => $value){
        $id = $arrayBocatasTarda[$key]["id"];
        $nom = $arrayBocatasTarda[$key]["nom"];
        $preu = $arrayBocatasTarda[$key]["preu"];
        $ruta = $arrayBocatasTarda[$key]["ruta"];

        echo "<div id='$id'><h1> $nom </h1>
                <h2> $preu </h2>
                <img src=$ruta width='200px'/>
                <input type='button' value='-' class='treure'>           
                <input type='text' id=i$id value='0'>
                <input type='button' value='+' class='afegir'>
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
            include 'Footer.php'
        ?>
    </footer>

    <script>
        let form = document.getElementById('mati');

        form.addEventListener('click', function(e) {

            if(e.target.classList.contains('afegir')){

                console.log("Has hecho click en afegir")
                console.log(e.target);

                //imprimo el ID del padre de quien ha generado el evento
                console.log(e.target.parentNode.id)
                //llamo a la funcion afegir producte
                afegirProducte(e.target.parentNode.id);
            }
            else if (e.target.classList.contains('treure')){
                console.log("Has hecho click en treure");
                treureProducte(e.target.parentNode.id);
            }
            console.log(e.target);

            function afegirProducte(idProducte){
                //alert("Has afegit un element del producte " + idProducte);
                document.getElementById("i" + idProducte).value++;

            }

            function treureProducte(idProducte){
                if(document.getElementById("i" + idProducte).value>0){
                    document.getElementById("i" + idProducte).value--;
                }
                id (document.getElementById("i" + idProducte).value==0);{
                  console.log("#" + idProducte + " .treure");
                    document.querySelectorAll("#" + idProducte+" .treure")[0];


                }
            }

        });

    </script>
    <script>
        let formT = document.getElementById('tarda');

        formT.addEventListener('click', function(e) {

            if(e.target.classList.contains('afegir')){

                console.log("Has hecho click en afegir")
                console.log(e.target);

                //imprimo el ID del padre de quien ha generado el evento
                console.log(e.target.parentNode.id)
                //llamo a la funcion afegir producte
                afegirProducte(e.target.parentNode.id);
            }
            else if (e.target.classList.contains('treure')){
                console.log("Has hecho click en treure");
                treureProducte(e.target.parentNode.id);
            }
            console.log(e.target);

            function afegirProducte(idProducte){
                //alert("Has afegit un element del producte " + idProducte);
                document.getElementById("i" + idProducte).value++;

            }

            function treureProducte(idProducte){
                if(document.getElementById("i" + idProducte).value>0){
                    document.getElementById("i" + idProducte).value--;
                }
                id (document.getElementById("i" + idProducte).value==0);{
                    console.log("#" + idProducte + " .treure");
                    document.querySelectorAll("#" + idProducte+" .treure")[0];


                }
            }

        });

    </script>
    <script src="/javascript/horaDia.js"></script>
</body>
</html>