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
                    window.onload=function (){

                        document.getElementById("nom").focus();

                    }
                    document.getElementById("comprar").addEventListener("click", function(e){

                        function comprovarNom() {
                            if (document.getElementById("nom").value == "") {
                                return 1;
                            }else if(!( /^[A-Za-zƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/.exec(document.getElementById("nom").value))){
                                return 2;
                            }
                        }

                        function comprovarTel() {
                            if (document.getElementById("telefon").value == "") {
                                return 1;
                            } else if (!(/^[0-9]+$/.exec(document.getElementById("telefon").value))) {
                                return 2;
                            }
                        }

                        function comprovarEmail(){
                            if(document.getElementById("correu").value==""){
                                return 1;
                            }else if(!(/^([a-zA-Z0-9._-]+)@inspedralbes.cat$/.exec(document.getElementById("correu").value))){
                                return 2;
                            }
                        }



                        if(comprovarNom()==1){
                            alert("Introdueix un nom");
                            e.preventDefault();
                        }else if(comprovarNom()==2){
                            alert("El nombre solo se debe estar compuesto por una palabra que contenga no más de las 27 letras del abecedario");
                            e.preventDefault();
                        }
                        if(comprovarTel()==1){
                            alert("Debes intorducir un número");
                            e.preventDefault();
                        }else if(comprovarTel()==2){
                            alert("El número debe contener estrictamente 9 dígitos");
                            e.preventDefault();
                        }
                        if(comprovarEmail()==1){
                            alert("Este campo no puede estar vacío");
                            e.preventDefault();
                        }else if (comprovarEmail()==2){
                            alert("Formato de email incorrecto (xxx@inspedralbes.cat)");
                            e.preventDefault();
                        }
                    });


                </script>
            </div>
    </body>
</html>