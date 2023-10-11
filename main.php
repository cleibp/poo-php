<?php

// Classe base abstrata (com abstração)
abstract class Forma {
    abstract public function calcularArea();
}

// Subclasse que herda de Forma
class Retangulo extends Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Subclasse que herda de Forma
class Circulo extends Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return M_PI * $this->raio * $this->raio;
    }
}

// Função principal
function main() {
    // Criar uma forma de retângulo
    $retangulo = new Retangulo(5.0, 4.0);

    // Calcular e imprimir a área do retângulo
    echo "Área do Retângulo: " . $retangulo->calcularArea() . "\n";

    // Criar uma forma de círculo
    $circulo = new Circulo(3.0);

    // Calcular e imprimir a área do círculo
    echo "Área do Círculo: " . $circulo->calcularArea() . "\n";
}

// Chamar a função principal
main();

?>
