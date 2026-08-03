<?php

class ClienteController
{
    public function registrarCliente($nombre, $documento)
    {
        echo "Cliente registrado correctamente.<br>";
        echo "Nombre: $nombre <br>";
        echo "Documento: $documento";
    }
}