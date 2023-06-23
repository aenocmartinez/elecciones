<?php

namespace Src\areaUrbana\domain;

class Barrio {
    private $id;
    private $nombre;
    private $comuna;
    private $createdAt;
    private $updatedAt;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
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

    public function setComuna(Comuna $comuna): void {
        $this->comuna = $comuna;
    }

    public function comuna(): string {
        return $this->comuna->nombre();
    }
    
    public function idComuna(): int {
        return $this->comuna->id();
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
}