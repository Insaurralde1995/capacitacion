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

  public function testSiAgregaMinaFueraDelTablero(){
    $buscaminas = new BuscaMinas (9,9);
    $this->assertFalse($buscaminas->agregarMina(11,11));
    
    }
public function testSiHayMinaCerca(){
        $buscaminas = new BuscaMinas (9,9);
        $buscaminas->agregarMina(3,2);
        $this->assertEquals(1,$buscaminas->jugar(3,3));
        

  }
  public function testSiNoHayMinaCerca(){
    $buscaminas = new BuscaMinas (9,9);
    $this->assertEquals(0,$buscaminas->jugar(3,3));
    

}
public function testSiPerdio(){
    $buscaminas = new BuscaMinas (9,9);
    $buscaminas->agregarMina(3,2);
    $this->assertEquals(0,$buscaminas->jugar(3,2));
    

}
public function testSiJugoYNoPerdio(){
    $buscaminas = new BuscaMinas (9,9);
    $buscaminas->agregarMina(3,2);
    $this->assertEquals(1,$buscaminas->jugar(3,3));
    


}
public function testSiGano(){
    $buscaminas = new BuscaMinas (9,9);
    $buscaminas->agregarMina(3,2);
    $buscaminas->sacarMina(3,2);
    $this->assertEquals(1,$buscaminas->gano());
    

}
public function testSiNoGano(){
    $buscaminas = new BuscaMinas (9,9);
    $buscaminas->agregarMina(3,2);
    $this->assertEquals(0,$buscaminas->gano());
    

}
}



/*
public function sacarMina
public function gano
public function terminoDeJugar
/*