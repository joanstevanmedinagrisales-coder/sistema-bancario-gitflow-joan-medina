<?php

class RetiroController
{
    public function retirar($saldo, $valor)
    {
        if ($valor <= $saldo) {
            $nuevoSaldo = $saldo - $valor;

            echo "===== RETIRO =====<br>";
            echo "Saldo anterior: $" . $saldo . "<br>";
            echo "Valor retirado: $" . $valor . "<br>";
            echo "Nuevo saldo: $" . $nuevoSaldo;
        } else {
            echo "No es posible realizar el retiro. Saldo insuficiente.";
        }
    }
}