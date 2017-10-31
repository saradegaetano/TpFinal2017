<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase {

    /**
     * Comprueba que el saldo de una tarjeta nueva sea cero.
     */
    public function testSaldoCero() {
        $tarjeta = new Tarjeta("comun");
        $this->assertEquals( $tarjeta->saldo(), 0 );
    }
    public function testSaldoCincuenta() {
        $tarjeta1 = new Tarjeta("comun");
        $tarjeta1->cargarSaldo( 50 );
        $this->assertEquals( $tarjeta1->saldo(), 50 );
    }
    public function testSaldoTrescientos() {
        $tarjeta2 = new Tarjeta ("comun");
        $tarjeta2->cargarSaldo( 332 );
        $this->assertEquals( $tarjeta2->saldo(), 388 );
    }
    public function testUnViaje() {
	    $colectivo144 = new Colectivo ( 144 );
	    $tarjeta2->pagar($colectivo144);
	    $this->assertEquals( $tarjeta2->saldo(), (388-9.70) );
    }
	 public function testDosViajes() {
	    $tarjeta1->pagar($colectivo144negra);
	    $this->assertEquals( $tarjeta1->saldo(), 50-9.70-9.70 );
    }
	public function testViajeTransbordo() {
		$tarjeta->cargarSaldo( 50 );
	    $tarjeta1->pagar($colectivo144);
		$colectivo103 = new Colectivo ( 103 );
		$tarjeta->pagar($colectivo103);
	    $this->assertEquals( $tarjeta->saldo(), 50-9.70-3.20 );
    }
	public function testDosViajesTransbordo() {
		$tarjeta3 = new Tarjeta ("comun")
		$tarjeta3->cargarSaldo( 50 );
	   	 $tarjeta3->pagar($colectivo144);
		$tarjeta3->pagar($colectivo103);
		$tarjeta3->pagar($colectivo103negra);
	    	$this->assertEquals( $tarjeta3->saldo(), 50-9.70-3.20-9.70 );
    }
	
}
