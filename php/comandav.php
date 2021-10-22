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
        <form method="post"  action="confirmacion.php">
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
                    <input type="text" id="correu" maxlength="40" required>
                </div>
            </div>
            <div class="d1">
                <div class="n1">
                    <p>Telèfon</p>
                </div>
                <div>
                    <input type="text" id="telefon" maxlength="30" required>
                </div>
            </div>

            <input type="submit" name="button" id="comprar" value="Comprar">
        </form>
    </div>

<form action="menu.php">
    <br/>
    <input type="submit" name="button" value="Menú">
</form>
    <footer>
        <?php
        include 'Footer.php'

        ?>
    </footer>

<script>


    document.getElementById("comprar").addEventListener("click", function(e){
        //1. COMPROBAMOS QUE EL NOMBRE ESTA OK
        if (document.getElementById("nom").value==""){
            alert("no puede estar vacio");
            //HACEMOS ESTO PARA QUE NO HAGA EL SUBMIT
            e.preventDefault();
        }

        //2. COMPRAOBAMOS QUE EL TELEFONO TUIENE UNA LOGNITUD DE 9

        //3. COMPROBAMOS QUE EL CORREO ES DEL TIPO XXXX@INSPEDRALBES.cAT




    })


    document.getElementById("nom").addEventListener("blur",function(e){
        if (e.target.value==""){
            alert("no puede estar vacio");
        }


    })

    function pruebaemail (valor){
        re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
        if(!re.exec(valor)){
            alert('email no valido');
        }
        else alert('email valido');
    }
</script>
</body>
</html>