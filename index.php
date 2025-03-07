<?php

/**
 * Archivo principal del proyecto.
 *
 * Ejemplo de uso de la clase Calculator.
 */

require_once __DIR__ . '/src/Calculator.php';
require_once __DIR__ . '/src/Circulo.php';
$calc = new Calculator();
$circ = new Circulo(5);
$resultados = [
  "5 + 3 =" => $calc->sumar(5, 3),
  "5 - 3 =" => $calc->restar(5, 3),
  "(Deprecated) 5 * 3 =" => $calc->mult(5, 3),
  "5 * 3 =" => $calc->multiplicar(5, 3),
  "Area de circulo con diametro 5 =" => $circ->area()
]
?>

<?php foreach ($resultados as $key => $value): ?>
  <h1><?= $key ?> <?= $value ?></h1>
<?php endforeach ?>