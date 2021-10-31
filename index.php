<h1>codigo html</h1>

<?php 
    # esto imprime
    echo "<h1>codigo php</h1>";

    $texto = 'repaso de php';
    $nombre = existeParametro("nombre");
    $altura = existeParametro("altura");
    $textoFinal = '<h1>'.$texto. ' ' . $nombre . ', su altura es: '. $altura . ' cm'.'</h1>';

    echo $textoFinal.'<hr>'. $nombre;

    #condicionales
    if($altura >=180) {
        echo '<h3>eres una persona alta</h3>';
    }
    else {
        echo "<h3>eres una persona baja</h3>";
    }

    #funciones
    function existeParametro($parametro){
        if (isset($_GET[$parametro])) {
            $valor = $_GET[$parametro];
        } else{
            if($parametro == 'nombre'){
                $valor= "Valor por defecto";
            }
            else {
                $valor= 180;            
            }
        }
        return $valor;
    }

    #arrays
    $personas = ['Juan', 'Roberto', 'Ernesto'];
?>

<h1>Listado</h1>
<ul>
    <?php
    foreach ($personas as $nombre) {
        echo '<li>'.$nombre.'</li>';
    }
    ?>
</ul>