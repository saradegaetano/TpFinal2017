<?php

namespace TpFinal;

class Tarjeta implements Tarjeta {
    protected $saldo;
    
    function __construct () {
        $this->saldo = 0;
    }
    public function saldo () {
        return $this->saldo;
    }
    
    public function cargarSaldo ( $monto ) {
		if ( $monto < 332 ) {
			$this->saldo += $monto;
			return;
		}
		elseif ( $monto < 624 ) {
			$this->saldo += 388;
			cargarSaldo ( $monto - 332 );
		}
		elseif ( $monto >= 624 ) {
			$this->saldo += 776;
			cargarSaldo ( $monto - 624 );
		}
    }
}
