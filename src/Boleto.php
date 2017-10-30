<?php
namespace TpFinal;

class Boleto extends Viaje {
	protected $saldo;
	protected $linea;
	protected $idTarjeta;
	
	function __construct ( Viaje $viaje ) {
		$this->fecha = $viaje->fecha;
		$this->hora = $viaje->hora;
		$this->tipo = $viaje->tipo;
		$this->saldo = $viaje->tarjeta->saldo();
		$this->linea = $viaje->transporte->linea();
		$this->idTarjeta = $viaje->tarjeta->id();
		
		echo $this->fecha "<br>";
		echo $this->hora "<br>";
		echo $this->"tarjeta: "idTarjeta "<br>";
		echo $this->"linea: "linea "<br>";
		echo $this->"franquicia: "tipo "<br>";
		echo $this->"saldo: "saldo "<br>";
	}
}
