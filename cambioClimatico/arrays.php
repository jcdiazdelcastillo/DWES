<?php
    function obtenerOpiniones(){
        $opiniones= [
            "muy-preocupado" => "Muy preocupado",
            "preocupado" => "Preocupado",
            "neutral" => "Neutral",
            "poco-preocupado" => "Poco preocupado",
            "nada-preocupado"=>"Nada preocupado"

        ];
        return $opiniones;
    }

    function obtenerMedidas(){
        $medidas = [
            ["id"=>"vehiculos-electricos", "nombre" => "Vehículos eléctricos"],
            ["id"=>"transporte-publico", "nombre" => "Transporte público"],
            ["id"=>"carriles-bici", "nombre" =>"Carriles bici"],
            ["id"=>"acerado", "nombre"=>"Mejorar el acerado"]
        ];
        return $medidas;
    }
?>