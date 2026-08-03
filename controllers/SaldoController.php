<?php

class SaldoController
{
    public function consultarSaldo($saldo)
    {
        echo "===== CONSULTA DE SALDO =====<br>";
        echo "Saldo disponible: $" . $saldo;
    }
}