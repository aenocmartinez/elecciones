<?php

namespace Src\votante\domain;

class Comentario {
    private $id;
    private $texto;
    private $createdAt;
    private $updatedAt;
    private $createdBy;
    private $votante;

    public function __construct(string $texto) {
        $this->texto = $texto;
    }

    public function setVotante(Votante $votante): void {
        $this->vontante = $votante;
    }

    public function votante(): Votante {
        return $this->votante;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function id(): int {
        return $this->id;
    }

    public function setTexto(string $texto): void {
        $this->texto = $texto;
    }

    public function texto(): string {
        return $this->texto;
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
}