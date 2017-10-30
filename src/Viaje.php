<?php

namespace TpFinal;
class Viaje {
	protected $fecha;
	protected $hora;
	protected $tipo;
	protected $monto;
	protected $transporte;
	protected $ID;
	protected $precioC = 9.70;
	protected $precioB = 12.45;
	protected $horaActual = time ( ); // no se si funcionara esto pero spongo que si
	protected $seisam = date ( "06:00:00am" );
	protected $dospm = date ( "02:00:00pm" );
	protected $diezpm = date ( "10:00:00pm" );
	
	function __construct ( Tarjeta $tarjeta, Transporte $transporte ) {
		$this->fecha = date( "Y/m/d" );
		$this->diaSemana = date( "D" );
		$this->hora = date( "h:i:sa" , $horaActual );
		$this->transporte = $transporte;
		$this->tipo = $tarjeta->franquicia;
		$this->ID = $tarjeta->nextID;
		
		$anterior = prev( $tarjeta->viajes ); 
		
		if ( is_a ( $this->transporte , Colectivo ) && $anterior->transporte->linea( ) != $this->transporte->linea( ) ) {
			if ( ( $this->hora > $seisam && $this->hora < $diezpm && ( $this->diaSemana == "Mon" || $this->diaSemana == "Tue" || $this->diaSemana == "Wed" || $this->diaSemana == "Thu" || $this->diaSemana == "Fri") ) || ( $this->hora > $seisam && $this->hora < $dospm && $this->diaSemana == "Sat" ) ) {
				if ( ( ( $this->horaActual - $anterior->horaActual ) / 60 ) < 60 ) {
					if ( $this->tipo == "comun" ) {
						if ( $tarjeta->saldo >= round( ( $this->precioC / 3 ) , 2 ) ) {
							$this->monto = round( ( $this->precioC / 3 ) , 2 );
						}
						else {
							echo "No tiene saldo suficiente<br>";
						}
					}
					elseif ( $this->tipo == "estudiantil" ) {
						if ( $tarjeta->saldo >= round( ( $this->precioC / 6 ) , 2 ) ) {
							$this->monto = round( ( $this->precioC / 6 ) , 2 );
						}
						else {
							echo "No tiene saldo suficiente<br>";
						}
					}
				}
			}
			elseif ( ( ( $this->horaActual - $anterior->horaActual ) / 60 ) < 90 )
				if ( $this->tipo == "comun" ) {
					if ( $tarjeta->saldo >= round( ( $this->precioC / 3 ) , 2 ) ) {
						$this->monto = round( ( $this->precioC / 3 ) , 2 );
					}
					else {
						echo "No tiene saldo suficiente<br>";
					}
				}
				elseif ( $this->tipo == "estudiantil" ) {
					if ( $tarjeta->saldo >= round( ( $this->precioC / 6 ) , 2 ) ) {
						$this->monto = round( ( $this->precioC / 6 ) , 2 );
					}
					else {
						echo "No tiene saldo suficiente<br>";
					}
				}
			}
		}
			
		
		if ( is_a ( $this->transporte , Bici ) ) {
			switch ( $this->tipo ) {
			case "comun":
				if ( $tarjeta->saldo >= $this->precioB {
					$this->monto = $this->precioB;
				}
				elseif ($tarjeta->viajeplus <= 1) {
					$tarjeta->viajeplus += 1;		
				}
				else {
					echo "No tiene saldo suficiente y ya utilizo los dos viajes plus<br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				}
				break;
					
			case "estudiantil":
				if ( $tarjeta->saldo >= round( ( $this->precioB / 2 ) , 2 ) )  {
					$this->monto = round( ( $this->precioB / 2 ) , 2 ) ;
				}
				elseif ($tarjeta->viajeplus <= 1) {
					$tarjeta->viajeplus += 1;		
				}
				else {
					echo "No tiene saldo suficiente y ya utilizo los dos viajes plus<br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				}
				break;
			case "total":
					$this->monto = 0;
				break;
			}
		}
		elseif ( is_a ( $this->transporte , Colectivo ) {
			switch ( $this->tipo ) {
			case "comun":
				if ( $tarjeta->saldo >= $this->precioC ) {
					$this->monto = $this->precioC;
				}
				elseif ($tarjeta->viajeplus <= 1) {
					$tarjeta->viajeplus += 1;		
				}
				else {
					echo "No tiene saldo suficiente y ya utilizo los dos viajes plus<br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				}
				break;
					
			case "estudiantil":
				if ( $tarjeta->saldo >= round( ( $this->precioC / 2 ) , 2 ) ) ) ) {
					$this->monto = round( ( $this->precioC / 2 ) , 2 ) ) ) );
				}
				elseif ($tarjeta->viajeplus <= 1) {
					$tarjeta->viajeplus += 1;		
				}
				else {
					echo "No tiene saldo suficiente y ya utilizo los dos viajes plus<br>";
					// aca habria que meter algo de que no se puede hacer el viaje
				}
				break;
			case "total":
					$this->monto = 0;
				break;
		}
		$tarjeta->saldo -= $this->monto;
	}
}
