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
		$this->monto = $viaje->monto();
		
		echo $this->fecha .  "<br>";
		echo $this->hora .  "<br>";
		echo "tarjeta: " . $this->idTarjeta .  "<br>";
		echo "linea: " . $this->linea  . "<br>";
		echo "franquicia: " . $this->tipo .  "<br>";
		echo "monto: " . $this->monto .  "<br>";
		echo "saldo: " . $this->saldo  . "<br>";
	}
}
