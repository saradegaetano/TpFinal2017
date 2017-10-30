<?php
namespace TpFinal;

class Colectivo {
	protected $linea;
	
	function __construct ($linea) {
		$this->linea = $linea;
	}
	
	public function linea () {
		return $this->linea;
	}
    }
}
