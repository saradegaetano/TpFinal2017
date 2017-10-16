interface Tarjeta {
 public function pagar(Transporte $transporte, $fecha_y_hora);
 public function cargarSaldo($monto);
 public function saldo();
 public function viajesRealizados();
}
