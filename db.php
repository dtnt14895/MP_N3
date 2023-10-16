<?php

try {
    $conexion = new PDO("mysql:host=localhost;dbname=base_usuarios","root","colarce2014.");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}    
class Animal {
    public $nombre;
    public $tipo;
    public $edad;

    public function __construct($nombre, $tipo, $edad) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->edad = $edad;
    }

    public function emitirSonido() {
        return "Este animal hace un sonido.";
    }

    public function moverse() {
        return "Este animal se mueve de alguna manera.";
    }
}

class Perro extends Animal {
    public $tipoDogChow;

    public function emitirSonido() {
        return "El perro ladra.";
    }

    public function morder($quien) {
        return "El perro muerde a " . $quien;
    }
}


class Gato extends Animal {
    public $tipoDeWhiskas;
    public function emitirSonido() {
        return "El gato maulla.";
    }
}

class Pajaro extends Animal {
    public function emitirSonido() {
        return "El pájaro canta.";
    }    
    public function volar() {
        return "El pájaro vuela por el cielo.";
    }
}

$perro = new Perro("Rex", "Canino", 5);
$gato = new Gato("Whiskers", "Felino", 3);
$pajaro = new Pajaro("Tweety", "Ave", 2);

echo $perro->nombre . " es un " . $perro->tipo . ". " . $perro->emitirSonido() . "\n";
echo $gato->nombre . " es un " . $gato->tipo . ". " . $gato->emitirSonido() . "\n";
echo $pajaro->nombre . " es un " . $pajaro->tipo . ". " . $pajaro->emitirSonido() . " " . $pajaro->volar() . "\n";

?>






