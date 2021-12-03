<?php

// Creación nde clase padre con métodos mágicos __set y __get
class DarthVader {
    private $status = "My power is 0";

    public function __set($a, $b) {
        $this->{$a} = $b;
    }

    public function __get($a) {
        return "The chosen one";
    }
}

// Creación de clase hija vacía (sin los métodos mágicos)
class LukeSkywalker extends DarthVader {

}

// Instanciando clase hija o subclase
$obj = new LukeSkywalker();
echo "<br>";

/**
 * Al pedir la variable "$power" que NO EXISTE en ninguna del clasas, el método mágico __get() la crea y devuelve el valor por defecto "The chosen one"
 */
echo "El valor de una variable que no existe llamada desde la clase hija es: " . $obj->power;
echo "<br>";
var_dump($obj);
echo "<br>";

// Sin embargo si asignamos, llamaremos al método mágico __set() el cuál muestra el mismo comportamiento: crea la variable y agina valor.
echo "El valor asignando a una variable que no existe es: " . $obj->power="May the force be with you";
echo "<br>";

// Este mismo comportamiento sucede si actuamos sobre una variable privada que en este caso es "$status":

echo "El valor de la variable privada \$status por defecto es: " . $obj->status;
echo "<br>";
var_dump($obj);
echo "<br>";
echo "El valor de la variable privada \$status se puede cambiar: " . $obj->status = "I am happy!";


/**
 * Todo esto sucede desde la clase hija, por lo tanto y en respuesta al apartado a) del examen, desde las clases hijas se activan los métodos mágicos de la clase padre.
 * Resumiendo, mediante los métodos mágicos es posible sobreescribir variables de clase no accesibles (protegidas o privadas) y al mismo tiempo,
 * generar nuevas variables en la instancianción del objeto de la subclase;
 */

?>

