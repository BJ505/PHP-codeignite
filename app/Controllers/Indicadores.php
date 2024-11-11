<?php 
namespace App\Controllers;

use App\Models\Indicador;

class Indicadores extends BaseController{

    public function index()
    {

        $indicador = new Indicador();
        $data['indicadores'] = $indicador->orderBy('id', 'ASC')->findAll();

        return view('indicadores/uf',$data);
    }

    public function create()
    {
        helper(['form', 'url']);

        $model = new Indicador();

        $data = [
            'nombreIndicador' => $this->request->getVar('txtNombreIndicador'),
            'codigoIndicador'  => $this->request->getVar('txtCodigoIndicador'),
            'unidadMedidaIndicador'  => $this->request->getVar('txtnidadMedidaIndicador'),
            'valorIndicador'  => $this->request->getVar('numValorIndicador'),
            'fechaIndicador'  => $this->request->getVar('dateFechaIndicador'),
            'tiempoIndicador'  => $this->request->getVar('txtTiempoIndicador'),
            'origenIndicador'  => $this->request->getVar('txtOrigenIndicador'),
            ];
        $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }

    public function getData($id = null)
    {
        
    $model = new Indicador();

    $data = $model->where('id', $id)->first();
    
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }

    public function update(){
        helper(['form', 'url']);

        $model = new Indicador();

        $id = $this->request->getVar('hiddenIdIndicador');

        $data = [
            'nombreIndicador' => $this->request->getVar('txtNombreIndicador'),
            'codigoIndicador'  => $this->request->getVar('txtCodigoIndicador'),
            'unidadMedidaIndicador'  => $this->request->getVar('txtnidadMedidaIndicador'),
            'valorIndicador' => $this->request->getVar('numValorIndicador'),
            'fechaIndicador'  => $this->request->getVar('dateFechaIndicador'),
            'tiempoIndicador'  => $this->request->getVar('txtTiempoIndicador'),
            'origenIndicador'  => $this->request->getVar('txtOrigenIndicador'),
            ];

        $update = $model->update($id,$data);
        if($update != false)
        {
            $data = $model->where('id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }

    public function delete($id = null){
        $model = new Indicador();
        $delete = $model->where('id', $id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}