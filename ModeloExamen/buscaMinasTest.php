<?php

require_once('./vendor/autoload.php');
require('./CasiBuscaMinas.php');
use PHPUnit\Framework\TestCase;
final class BuscaMinasTest extends TestCase
{
  /**
   * @return Billetera
   */
  public function crearBilletera() {
    $billetera = new Billetera();
    return $billetera;
  }