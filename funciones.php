<?php
    //Función sin parámetros
    function saludo(){
        echo "hola<br>";
    }
    saludo();

    //funciones con parámetros
    function despedida ($adios){
        echo $adios."<br>";
    }
    despedida("adios salida");

    //funcion con retorno
    function retorno ($retornar){
        return $retornar;
    }
    echo retorno ("Esto es un retorno");

?>