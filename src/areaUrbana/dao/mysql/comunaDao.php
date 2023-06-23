<?php

namespace Src\areaUrbana\dao\mysql;

use Illuminate\Database\Eloquent\Model;

use Src\areaUrbana\domain\comunaRepository;
use Src\areaUrbana\domain\Comuna;

use Exception;


class ComunaDao extends Model implements comunaRepository 
{
    protected $table = "comunas";
    protected $fillable = ['nombre', 'created_at', 'updated_at'];

    public function crearComuna(Comuna $comuna): bool {

        try {
            $nuevaComuna = ComunaDao::create([
                'nombre' => $comuna->nombre(),
            ]);
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}