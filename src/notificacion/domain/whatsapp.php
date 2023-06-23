<?php

namespace Src\notificacion\domain;


class WhatsApp implements MedioDeMensajeria {

    public function enviar(string $mensaje, $destinatarios = []): bool {
        echo "WhatsApp => [Mensaje => ".$mensaje."]" ;
        return false;
    }
}