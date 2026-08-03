<?php

class ConsignacionController
{
    public function consignar($saldo, $valor)
    {
        $nuevoSaldo = $saldo + $valor;

        echo "===== CONSIGNACIÓN =====<br>";
        echo "Saldo anterior: $" . $saldo . "<br>";
        echo "Valor consignado: $" . $valor . "<br>";
        echo "Nuevo saldo: $" . $nuevoSaldo;
    }
}