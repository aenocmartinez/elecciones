<?php

namespace Src\notificacion\domain;

class Notificacion {
    private $id;
    private $titulo;
    private $mensaje;
    private $observacion;
    private $estado;
    private $fecha;
    private $hora;
    private $createdAt;
    private $updatedAt;
    private $destinatarios;
    private $medio;

    public function __construct() {
        $this->estado = 'creado';
        $this->destinatarios = [];
        $this->medio = new WhatsApp();
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function id(): int {
        return $this->id;
    }

    public function setMedio(string $medio): void {
        $this->medio = new WhatsApp();
        if (strtolower($medio) == "email") {
            $this->medio = new Email();
        }        
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function titulo(): string {
        return $this->titulo;
    }
    
    public function setMensaje(string $mensaje): void {
        $this->mensaje = $mensaje;
    }

    public function mensaje(): string {
        return $this->mensaje;
    }

    public function setObservacion(string $observacion): void {
        $this->observacion = $observacion;
    }

    public function observacion(): string {
        return $this->observacion;
    }  
    
    public function setEstado(string $estado): void {
        $this->estado = $estado;
    }

    public function estado(): string {
        return $this->estado;
    }

    public function setFecha(string $fecha): void {
        $this->fecha = $fecha;
    }

    public function fecha(): string {
        return $this->fecha;
    }

    public function setHora(string $hora): void {
        $this->hora = $hora;
    }

    public function hora(): string {
        return $this->hora;
    }    

    public function setCreatedAt(string $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function createdAt(): string {
        return $this->createdAt;
    }

    public function setUpdatedAt(string $updatedAt): void {
        $this->updatedAt = $updatedAt;
    }

    public function updatedAt(): string {
        return $this->updatedAt;
    }
    
    public function enviar() {
        $this->medio->enviar($this->mensaje, $this->destinatarios);
    }
}