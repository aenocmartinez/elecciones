<?php

namespace Src\notificacion\domain;

class Email implements MedioDeMensajeria {

    public function enviar(string $mensaje, $destinatarios = []): bool {
        echo "Email => [Mensaje => ".$mensaje."]" ;
        return false;
    }    
}