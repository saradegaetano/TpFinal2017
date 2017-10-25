<?php
namespace TpFinal;
class Tarjeta implements Tarjeta {
	protected $saldo;
	protected $franquicia;
	protected $viajes;
	protected $viajeplus;
	protected $fh;
	
	function __construct ( ){
		$this->viajeplus = 0;
		$this->viajes = [];
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
	
	public function pagar ( Transporte $transporte ) {
		$fh=new DateTime();
		$nViaje = $fh->format('Y-m-d-H-i-s');
		$$nViaje = new Viaje ( $this , $transporte );	// El nombre del objeto tarjeta es la fecha y la hora del viaje
		array_push ( $viajes , $$nViaje );
	}
}
