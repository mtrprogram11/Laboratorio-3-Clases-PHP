
<?php
class Cilindro {
    private $radio;
    private $altura;
    private $areaLateral;
    private $areaTotal;
    private $volumen;

    // Constructor parametrizado
    public function __construct($radio, $altura) {
        $this->radio = $radio;
        $this->altura = $altura;
    }

    // Calcular area lateral
    public function calcularAreaLateral() {
        $this->areaLateral = 2 * 3.1416 * $this->radio * $this->altura;
    }

    // Calcular area total
    public function calcularAreaTotal() {
        $this->areaTotal = 2 * 3.1416 * $this->radio * ($this->altura + $this->radio);
    }

    // Calcular volumen
    public function calcularVolumen() {
        $this->volumen = 3.1416 * $this->radio * $this->radio * $this->altura;
    }

    // Metodos get
    public function getRadio() {
        return $this->radio;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getAreaLateral() {
        return $this->areaLateral;
    }

    public function getAreaTotal() {
        return $this->areaTotal;
    }

    public function getVolumen() {
        return $this->volumen;
    }
}

// Crear un cilindro
$cilindro = new Cilindro(4, 9);

// Realizar los calculos
$cilindro->calcularAreaLateral();
$cilindro->calcularAreaTotal();
$cilindro->calcularVolumen();

// Mostrar los resultados
echo "Radio: " . $cilindro->getRadio() . "\n";
echo "Altura: " . $cilindro->getAltura() . "\n";
echo "Area lateral: " . $cilindro->getAreaLateral() . "\n";
echo "Area total: " . $cilindro->getAreaTotal() . "\n";
echo "Volumen: " . $cilindro->getVolumen() . "\n";
?>
