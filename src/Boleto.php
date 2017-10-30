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
	}
}
