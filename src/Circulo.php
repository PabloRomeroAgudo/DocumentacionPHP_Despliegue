<?php

/**
 * Class Circulo
 *
 * Representa un círculo y permite calcular su área.
 */
class Circulo {

  /**
   * Valor de PI.
   *
   * Constante utilizada en los cálculos matemáticos, por ejemplo, para calcular el área del círculo.
   *
   * @var float
   */
  const PI = 3.1416;

  /**
   * Radio del círculo.
   *
   * @var float
   */
  private $radio;

  /**
   * Instancia de Calculator para realizar operaciones.
   *
   * @var Calculator
   */
  private $calculator;

  /**
   * Constructor de la clase Circulo.
   *
   * @param float $radio Radio del círculo.
   */
  public function __construct($radio) {
    $this->radio = $radio;
    $this->calculator = new Calculator();
  }

  /**
   * Calcula el área del círculo.
   *
   * La fórmula utilizada es:
   * <pre><b>área = PI * radio<sup>2</sup></b></pre>
   * 
   * Este método utiliza la constante {@link self::PI PI} y el método {@link Calculator::multiplicar() multiplicar} para el cálculo.
   *
   * @return float El área del círculo.
   */
  public function area() {
    $radioAlCuadrado = $this->calculator->multiplicar($this->radio, $this->radio);

    return $this->calculator->multiplicar(self::PI, $radioAlCuadrado);
  }

  /**
   * Calcula el perímetro del círculo.
   *
   * Este método no está implementado y siempre lanzará un error.
   *
   * @throws Error Siempre lanza un Error con el mensaje "not implemented".
   * @return void
   *
   */
  public function perimetro() {
    // TODO: Hacer función
    throw new Error("not implemented");
  }

  /**
   * Funcion creada para ser ignorada en la documentación
   *
   * @return void
   * 
   * @ignore
   */
  public function funcionIgnorada() {
  }
}
