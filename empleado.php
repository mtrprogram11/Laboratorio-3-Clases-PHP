
<?php
class Empleado {
    private $nombre;
    private $cedula;
    private $edad;
    private $sueldoBruto;
    private $seguroSocial;
    private $impuestoRenta;
    private $sueldoNeto;

    // Constructor parametrizado
    public function __construct($nombre, $cedula, $edad, $sueldoBruto) {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->sueldoBruto = $sueldoBruto;
        $this->seguroSocial = 0;
        $this->impuestoRenta = 0;
        $this->sueldoNeto = 0;
    }

    // Calcular seguro social
    public function calcularSS() {
        $this->seguroSocial = $this->sueldoBruto * 0.125;
    }

    // Calcular impuesto sobre la renta anual
    public function calcularIR() {
        $sueldoAnual = $this->sueldoBruto * 12;

        if ($sueldoAnual < 11000) {
            $this->impuestoRenta = 0;
        } elseif ($sueldoAnual < 50000) {
            $this->impuestoRenta = $this->sueldoBruto * 0.15;
        } else {
            $this->impuestoRenta = $this->sueldoBruto * 0.25;
        }
    }

    // Calcular sueldo neto
    public function setSueldoNeto() {
        $this->sueldoNeto = $this->sueldoBruto - $this->seguroSocial - $this->impuestoRenta;
    }

    // Metodos get
    public function getNombre() {
        return $this->nombre;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getSueldoBruto() {
        return $this->sueldoBruto;
    }

    public function getSeguroSocial() {
        return $this->seguroSocial;
    }

    public function getImpuestoRenta() {
        return $this->impuestoRenta;
    }

    public function getSueldoNeto() {
        return $this->sueldoNeto;
    }
}

// Crear un empleado
$empleado = new Empleado("Maria Rodriguez", "6-727-1793", 20, 1500);

// Realizar los calculos
$empleado->calcularSS();
$empleado->calcularIR();
$empleado->setSueldoNeto();

// Mostrar los resultados
echo "Nombre: " . $empleado->getNombre() . "\n";
echo "Cedula: " . $empleado->getCedula() . "\n";
echo "Edad: " . $empleado->getEdad() . "\n";
echo "Sueldo bruto: " . $empleado->getSueldoBruto() . "\n";
echo "Seguro social: " . $empleado->getSeguroSocial() . "\n";
echo "Impuesto sobre la renta: " . $empleado->getImpuestoRenta() . "\n";
echo "Sueldo neto: " . $empleado->getSueldoNeto() . "\n";
?>
