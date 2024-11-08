<?php 
namespace App\Models;

use CodeIgniter\Model;

class Indicador extends Model{
    protected $table      = 'indicadores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreIndicador', 'codigoIndicador', 'unidadMedidaIndicador', 'valorIndicador', 'fechaIndicador', 'tiempoIndicador', 'origenIndicador'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table('indicadores');
    }

    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}