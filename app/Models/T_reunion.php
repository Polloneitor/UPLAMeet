<?php

namespace App\Models;

use CodeIgniter\Model;

class T_reunion extends Model
{
    protected $table      = 'reunion';
    protected $primaryKey = 'idReunion';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Titulo','Temario','Acta','Enlace','Estado','Fecha','TipoReunion','Hora'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'Titulo'   =>  'required|min_length[15]|string'
    ];
    protected $validationMessages = [
        'Titulo' => [
            'required' => 'Se requiere un titulo',
            'min_length' => 'El titulo debe tener mínimo 15 carácteres',
            'string' => 'Tiene que contener carácteres alfabéticos'
        ]
    ];
    protected $skipValidation     = false;

    public function reuniones()
    {
        $users = $this->select('*')
            ->findAll();

        return $users;
    }
}