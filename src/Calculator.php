<?php

/**
 * Clase para manejar operaciones matemáticas básicas.
 *
 * Esta clase permite realizar operaciones aritméticas simples,
 * tales como suma, resta y multiplicación.
 *
 * @author Los cinco
 * @version 1.0
 */

class Calculator {

  /**
   * Suma dos números.
   *
   * @param float $a Primer número.
   * @param float $b Segundo número.
   *
   * @return float La suma de $a y $b.
   */
  public function sumar($a, $b) {
    return $a + $b;
  }

  /**
   * Resta dos números.
   *
   * @param float $a Primer número.
   * @param float $b Segundo número.
   *
   * @return float La resta de $a y $b.
   */
  public function restar($a, $b) {
    return $a - $b;
  }

  /**
   * Multiplica dos números haciendo uso del método sumar.
   *
   * @deprecated Esta función está obsoleta. Se recomienda utilizar el método {@link Calculator::multiplicar() multiplicar} en su lugar.
   *
   * @param float $a Primer número.
   * @param float $b Segundo número.
   *
   * @return float El producto de $a y $b.
   * 
   * @see Calculator::sumar()
   */
  public function mult($a, $b) {
    $resultado = 0;
    for ($i = 1; $i <= $b; $i++) {
      $resultado = $this->sumar($resultado, $a);
    }
    return $resultado;
  }

  /**
   * Multiplica dos números.
   *
   * @param float $a Primer número.
   * @param float $b Segundo número.
   *
   * @return float El producto de $a y $b.
   */
  public function multiplicar($a, $b) {
    return $a * $b;
  }
}
