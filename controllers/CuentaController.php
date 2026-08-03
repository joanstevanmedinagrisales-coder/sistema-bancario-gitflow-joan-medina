<?php

class CuentaController
{
    public function crearCuenta($numeroCuenta, $saldoInicial)
    {
        echo "Cuenta creada correctamente.<br>";
        echo "Número: $numeroCuenta <br>";
        echo "Saldo inicial: $saldoInicial";
    }
}