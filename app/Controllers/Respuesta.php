<?php namespace App\Controllers;

use App\Models\RespuestaModel;

class Respuesta extends BaseController
{
	public function index($id)
	{
		$data["id_solicitud"]=$id;
		$data["content"]='respuesta_form.php';
		echo view('index',$data);
	}

	public function guardar()
	{
		$respuestaModel = new $respuestaModel();
		$respuesta = [
			'id_solicitud' => $this->request->getVar('id_solicitud'),
			'asunto' => $this->request->getVar('asunto'),
			'descripcion' => $this->request->getVar('descripcion'),
			'firma' => $this->request->getVar('firma'),
			'id_empleado_responde' => $_SESSION["user"]["id"],
		];

		
	}
}
