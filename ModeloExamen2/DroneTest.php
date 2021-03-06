<?php
/**
 * 
 * Tareas:
 *  - Bajar composer
 *  - Instalar phpunit
 *  - Revisar los tests
 *  - Leer la explicación de la clase
 *  - Que pasen los tests
 *  - Conquistar el mundo
 *  - Aprobar el curso!
 * 
 */
include './vendor/autoload.php';
include 'Drone.php';

use PHPUnit\Framework\TestCase;

final class DroneTest extends TestCase
{

  public function testDrone() {
    $drone = new Drone(50);
    $this->assertTrue($drone->mover(5,5));
    $this->assertEquals(40, $drone->cantidadDeBateria());
    $this->assertEquals(array(array('x'=>5, 'y'=>5)), $drone->historial());

    $this->assertTrue($drone->mover(7,7));
    $this->assertEquals(36, $drone->cantidadDeBateria());
    $this->assertEquals(
      array(array('x'=>5, 'y'=>5), array('x'=>7, 'y'=>7)),
      $drone->historial()
    );

    $this->assertTrue($drone->mover(0,0));
    $this->assertEquals(50, $drone->cantidadDeBateria());
    
    $this->assertFalse($drone->mover(500,500));
  }

}