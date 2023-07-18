<?php

namespace App\Models;

use CodeIgniter\Model;

class T_reunion extends Model
{
    protected $table      = 'tipo_reunion';
    protected $primaryKey = 'idTipoReunion';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nombre','Recurrente','TiempoRecurrencia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [
    ];
    protected $skipValidation     = false;

    public function reuniones()
    {
        $users = $this->select('*')
            ->findAll();

        return $users;
    }
}