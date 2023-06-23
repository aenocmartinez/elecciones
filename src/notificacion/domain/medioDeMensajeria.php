<?php

namespace Src\notificacion\domain;

interface MedioDeMensajeria {
    public function enviar(string $mensaje, $destinatarios = []): bool;
}