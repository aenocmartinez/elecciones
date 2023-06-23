<?php

namespace Src\areaUrbana\domain;

interface comunaRepository {
    public function crearComuna(Comuna $comuna): bool;
}