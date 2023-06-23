<?php

namespace Src\arearUrbana\domain;

class Comuna {
    private $id;
    private $nombre;
    private $barrios;
    private $createdAt;
    private $updatedAt;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        $this->barrios = [];
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

    public function agregarBarrio(string $nombre): void {
        array_push($this->barrios, new Barrio($nombre));
    }

    public function barrios(): array {
        return $this->barrios;
    }
}