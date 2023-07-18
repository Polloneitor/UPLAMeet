<?php

namespace App\Models;

use CodeIgniter\Model;

class T_reunion extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['NombreUsuario','EmailUsuario','CargoUsuario'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'NombreUsuario'   =>  'required|min_length[15]|string'
    ];
    protected $validationMessages = [
        'NombreUsuario' => [
            'required' => 'Se requiere un titulo',
            'min_length' => 'El titulo debe tener mínimo 15 carácteres',
            'string' => 'Tiene que contener carácteres alfabéticos'
        ]
    ];
    protected $skipValidation     = false;

    public function usuarios()
    {
        $users = $this->select('*')
            ->findAll();

        return $users;
    }
}