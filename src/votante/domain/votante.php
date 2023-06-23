<?php

namespace Src\votante\domain;

class Votante {

    private $id;
    private $nombre;
    private $telefono;
    private $cedula;
    private $comuna;
    private $barrio;
    private $direccion;
    private $estrato;
    private $sexo;
    private $fecNac;
    private $lugarVotacion;
    private $mesaVotacion;
    private $lider;
    private $comite;
    private $pactoNumVotos;
    private $createdAt;
    private $updatedAt;
    private $interesado;
    private $contactado;
    private $comentarios = array();
    private $etiqueta;
    private $latitud;
    private $longitud;
    private $createdBy;

    public function __construct(string $nombre, string $cedula, string $telefono) {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->comentarios = [];
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function id(): int {
        return $this->id;
    }
    
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function nombre(): string {
        return $this->nombre;
    }
    
    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    public function telefono(): string {
        return $this->telefono;
    }
    
    public function setCedula(string $cedula): void {
        $this->cedula = $cedula;
    }

    public function cedula(): string {
        return $this->cedula;
    } 
    
    public function setComuna(string $comuna): void {
        $this->comuna = $comuna;
    }

    public function comuna(): string {
        return $this->comuna;
    }
    
    public function setBarrio(string $barrio): void {
        $this->barrio = $barrio;
    }

    public function barrio(): string {
        return $this->barrio;
    }
    
    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function direccion(): string {
        return $this->direccion;
    }
    
    public function setEstrato(string $estrato): void {
        $this->estrato = $estrato;
    }

    public function estrato(): string {
        return $this->estrato;
    }
    
    public function setSexo(bool $sexo): void {
        $this->sexo = $sexo;
    }

    public function sexo(): bool {
        return $this->sexo;
    }
    
    public function setFechaNacimiento(string $fecNac): void {
        $this->fecNac = $fecNac;
    }

    public function fechaNacimiento(): string {
        return $this->fecNac;
    }    

    public function setLugarVotacion(string $lugarVotacion): void {
        $this->lugarVotacion = $lugarVotacion;
    }

    public function lugarVotacion(): string {
        return $this->lugarVotacion;
    }

    public function setMesaVotacion(string $mesaVotacion): void {
        $this->mesaVotacion = $mesaVotacion;
    }

    public function mesaVotacion(): string {
        return $this->mesaVotacion;
    }
    
    public function setLider(Votante $lider): void {
        $this->lider = $lider;
    }

    public function lider(): Votante {
        return $this->lider;
    }

    public function setComite(string $comite): void {
        $this->comite = $comite;
    }

    public function comite(string $comite): string {
        return $this->comite;
    }

    public function setPactoNumVotos(int $pactoNumVotos): void {
        $this->pactoNumVotos = $pactoNumVotos;
    }

    public function pactoNumVotos(): int {
        return $this->pactoNumVotos;
    }  
    
    public function setInteresado(string $interesado): void {
        $this->interesado = $interesado;
    }

    public function interesado(): string {
        return $this->interesado;
    }    

    public function setContactado(string $contactado): void {
        $this->contactado = $contactado;
    }

    public function contactado(): string {
        return $this->contactado;
    }    

    public function setEtiqueta(string $etiqueta): void {
        $this->etiqueta = $etiqueta;
    }

    public function etiqueta(): string {
        return $this->etiqueta;
    }    

    public function setLatitud(string $latitud): void {
        $this->latitud = $latitud;
    }

    public function latitud(): string {
        return $this->latitud;
    }    

    public function setLongitud(string $longitud): void {
        $this->longitud = $longitud;
    }

    public function longitud(): string {
        return $this->longitud;
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
    
    public function setCreatedBy(string $createdBy): void {
        $this->createdBy = $createdBy;
    }

    public function createdBy(): string {
        return $this->createdBy;
    }    

    public function agregarComentario(string $texto): void {
        array_push($this->comentarios, new Comentario($texto));
        
    }

    public function listarComentarios(): array {
        return $this->comentarios;
    }
}