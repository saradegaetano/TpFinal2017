<?php

namespace TpFinal;
class Viaje {
	protected $fecha;
	protected $hora;
	protected $tipo;
	protected $monto;
	protected $transporte;
	
	function __construct ( $tarjeta, Transporte $transporte ) {
		$this->fecha = date( "Y/m/d" );
		$this->hora = date( "h:i:sa" );
		$this->transporte = $transporte;
		$this->tipo = $tarjeta->franquicia;
		if ( is_a ( $this->transporte , Bici ) ) {
			$this->monto = 12;
		}
		elseif ( is_a ( $this->transporte , Colectivo ) {
			switch ( $this->tipo ) {
			case "comun":
				if ( $tarjeta->saldo >= 9,7 ) {
					$tarjeta->saldo -= 9,7;
					$this->monto = 9,7;
				}
				else echo "No tiene saldo suficiente <br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				break;
			case "estudiantil":
				if ( $tarjeta->saldo >= 4,85 ) {
					$tarjeta->saldo -= 4,85;
					$this->monto = 4,85;
				}
				else echo "No tiene saldo suficiente <br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				break;
			case "total":
					$this->monto = 0;
				break;
		}
	}
}
