<?php
namespace TpFinal;
class Tarjeta implements Tarjeta {
	protected $saldo;
	protected $franquicia;
	protected $viajes;
	protected $viajeplus;
	
	function __construct ( ){
	$this->viajeplus = 0;
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
	
	public function pagar ( Transporte $transporte, $fecha_y_hora ) {
		switch ( $this->franquicia ) {
			case "comun":
				if ( $this->saldo >= 9,7 ) {
					$this->saldo -= 9,7;
				}
				break;
			case "estudiantil":
				if ( $this->saldo >= 4,85 ) {
					$this->saldo -= 4,85;
				}
				break;
			case "total":
				break;
		}
	}
}
