<?php

namespace TpFinal;
class Viaje {
	protected $fecha;
	protected $hora;
	protected $tipo;
	protected $monto;
	protected $transporte
	
	function __construct ( $tipo, $monto, $transporte ) {
		$this->fecha = date( "Y/m/d" );
		$this->hora = date( "h:i:sa" );
	}
}
