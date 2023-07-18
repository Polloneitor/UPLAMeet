<?php

namespace App\Models;

use CodeIgniter\Model;

class T_reunion extends Model
{
    protected $table      = 'listainvitados';
    protected $primaryKey = 'idLista';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Cantidad','ListaInvitados'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [
    ];
    protected $skipValidation     = false;

    public function usuarios()
    {
        $users = $this->select('*')
            ->findAll();

        return $users;
    }
}