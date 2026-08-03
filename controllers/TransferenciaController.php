<?php

class TransferenciaController
{
    public function transferir($cuentaOrigen, $cuentaDestino, $valor)
    {
        echo "===== TRANSFERENCIA =====<br>";
        echo "Cuenta origen: " . $cuentaOrigen . "<br>";
        echo "Cuenta destino: " . $cuentaDestino . "<br>";
        echo "Valor transferido: $" . $valor;
    }
}