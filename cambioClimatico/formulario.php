<?php
    require 'arrays.php';

    $medidas = obtenerMedidas();
    $opiniones = obtenerOpiniones();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>Formulario sobre la movilidad sostenible</title>
    </head>
    <body>
        <header>
            <h1>Formulario de opinión</h1>
            <nav id="navegacion">
                <div id="barranavegacion">
                    <a href="index.html">Informacion General</a>
                    <a href="formulario.html">Formulario de Opinión Ciudadana</a>
                </div>
            </nav>
        </header>
        <main>
            <section>
                <h2>Cuéntanos tu opinión sobre el impacto del transporte en el medio ambiente</h2>
                <form action="recoger.php" method="post">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input type = "text" name="nombre" id="nombre">
                    </div>

                    <div>
                        <label for="email">Correo electronico</label>
                        <input type = "email" name="email" id="email">
                    </div>

                    <div>
                        <label for="edad">Edad </label>
                        <input type = "number" name="edad" id="edad">
                    </div>

                    <div>
                        <p>¿Que medio de transporte utilizas normalmente?</p>
                        <div class="radio-individual">
                            <input type="radio" id="coche" name="transporte" value="coche">
                            <label for="coche">Coche</label>
                        </div>

                        <div class="radio-individual">
                            <input type="radio" id="bus" name="transporte" value="bus">
                            <label for="bus">Autobús</label>
                        </div>

                        <div class="radio-individual">
                            <input type="radio" id="bici" name="transporte" value="bici">
                            <label for="bici">Bicicleta</label>
                        </div>

                        <div class="radio-individual">
                            <input type="radio" id="pie" name="transporte" value="pie">
                            <label for="pie">A pie</label>
                        </div>
                    </div>

                    <div class="radio-general">
                        <p>¿Qué medidas apoyarías para combatir el cambio climático?</p>

                        <?php
                            foreach($medidas as $valor){
                                echo '<div class="radio-individual">';
                                    echo '<label for ="'.$valor['id'].'">'.$valor['nombre'].'</label>';
                                    echo '<input type="checkbox" name="medidas[]" value="'.$valor['id'].'" id="'.$valor['id'].'">';
                                echo '</div>';
                            }
                        ?>
                    <div>
                        <label for="opiniones" id="opinion"> Nivel de preocupación sobre el impacto medioambiental</label>
                        <select name = "opiniones" id = "opiniones">
                            <?php
                                foreach($opiniones as $indice => $valor){
                                    echo '<option value="'.$indice.'">'.$valor.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="radio-general">
                        <p>Aceptas terminos y licencias</p>
                        <div class="radio-individual">
                            <label for = "terminos">Si</label>
                            <input type = "checkbox" name="terminos" id="terminos" value="SI">
                        </div>
                    <div>
                        <input type="submit" name="Enviar">
                        <input type="reset" name="Reiniciar">
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>