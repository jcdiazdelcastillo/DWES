<?php

    function visualizarCamposEnviados(){

        echo "<b>Nombre: </b>";
        if (!empty($_POST['nombre'])){
            echo $_POST['nombre']."<br>";
        }else{
            echo "No se ha introducido nombre <br>";
        }

        echo "<b>Correo: </b>";
        if(!empty($_POST["email"])){
            echo $_POST["email"]."<br>";
        }else{
            echo "No se ha introducido correo <br>";
        }

        echo "<b>Edad: </b>";
        if(!empty($_POST["edad"])){
            echo $_POST["edad"]."<br>";
        }else{
            echo"edad no introducida <br>";
        }

         echo"<b>Medio de transporte más utilizado: </b>";
        if(isset($_POST["transporte"])){
           echo $_POST["transporte"]."<br>"; 
        }else{
            echo "No ha seleccionado ningún transporte <br>";
        }

        echo "<b>Medidas Seleccionadas para combatir el cambio climático</b><br>";
        if(isset($_POST["medidas"])){
            
            foreach($_POST["medidas"] as $valor){
                echo $valor."<br>";
            }
        }else{
            echo "ninguna medida seleccionada <br>";
        }

        echo "<b>Nivel de preocupación: </b>".$_POST["opiniones"]."<br>";
        
        echo "<b>Términos: </b>";
        if (isset($_POST["terminos"])){
            echo $_POST["terminos"];
        }else{
            echo "No acepta los términos";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        visualizarCamposEnviados();
    ?>
</body>
</html>