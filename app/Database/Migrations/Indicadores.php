<?php 
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Indicadores extends Model{

    protected $table = 'indicadores';
    //list fields
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreIndicador', 'codigoIndicador', 'unidadMedidaIndicador', 'valorIndicador', 'fechaIndicador', 'tiempoIndicador', 'origenIndicador'];
    
}