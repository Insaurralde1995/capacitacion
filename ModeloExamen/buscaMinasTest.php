<?php

require_once('./vendor/autoload.php');
require('./CasiBuscaMinas.php');
use PHPUnit\Framework\TestCase;
final class BuscaMinasTest extends TestCase
{
  /**
   * @return BuscaMinas
   */ 
  public function crearBuscaminas() {
    $buscaminas = new Buscaminas();
    return $buscaminas;
  }

  public function testExistsBuscaminas() {
    $this->assertTrue(class_exists("BuscaMinas"));
  }

  public function testSiAgregaMina(){
  $buscaminas = new BuscaMinas (9,9);
  $this->assertTrue($buscaminas->agregarMina(1,1));
  
  }

  }
