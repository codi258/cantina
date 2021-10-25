<html>
    <head>
        <title>Comanda</title>
        <link rel="stylesheet" href="/css/elcss.css">
    </head>
        <body>
            <div class="formDades">
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
                        //2. COMPROBAMOS QUE EL CORREO ES DEL TIPO XXXX@INSPEDRALBES.cAT
                        else if(document.getElementById("correu").value.match!=("/^([a-zA-Z0-9._-]+)@inspedralbes.cat$/")){
                            alert("Correo Incorrecto");

                            e.preventDefault();

                        }
                        //1. COMPRAOBAMOS QUE EL TELEFONO TUIENE UNA LOGNITUD DE 9
                        else if(document.getElementById("telefon").value.length!=9){
                            alert("El número debe contener nueve dígitos");
                            e.preventDefault();
                        }
                    })
                </script>
            </div>
    </body>
</html>