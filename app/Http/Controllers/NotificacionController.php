<?php

namespace App\Http\Controllers;

use Src\notificacion\domain\Notificacion;
use Src\notificacion\domain\WhatsApp;
use Src\notificacion\domain\Email;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function index() {
        $notificacion = new Notificacion();
        $notificacion->setTitulo("Nombre de la notificación");
        $notificacion->setMensaje("Mensaje 1");
        $notificacion->setMedio("whatsapp");

        $notificacion->enviar();

        dd("Llega a esta nueva ruta");
    }
}
