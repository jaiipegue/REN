<?php namespace App\Controllers;

use App\Models\SitioModel;
use App\Models\ImagenModel;


class Solicitud extends BaseController
{
	public function index()
	{
		if ($_SESSION["user"]["tipo_usuario"] == 'Ciudadano') {
			$data = [
				'content' => 'sitio_form.php'
			];
			return view('index', $data);
		}
		else
		{
			return redirect('sitio/noValidados');
		}
	}

	public function confirmacion(){
		$data["content"]='confirmacion.php';
		echo view('index',$data);
	}

	public function cList(){
		$id_usuario = $_SESSION["user"]["id"];
		$solicitudModel = new SolicitudModel();
		$data["solicitudes"] = $solicitudModel->where(array('id_usuario'=> $id_usuario) )->find();
		$data["content"]='csolicitudes/list.php';
		echo view('index',$data);
	}

	public function list(){
		$oficina = $_SESSION["user"]["id_oficina_empleado"];
		$id = $_SESSION["user"]["id"];
		$solicitudModel = new SolicitudModel();

		$data["solicitudes"] = $solicitudModel->where(array('id_oficina_destino'=> $oficina,"id_usuario != "=>$id) )->find();
		
		$data["content"]='solicitudes/list.php';
		echo view('index',$data);
	}

	public function save(){
		$sitioModel = new SitioModel();
		$dataSitio = [
			'id_usuario' => $_SESSION["user"]["id"],
			'descripcion' => $this->request->getPost('descripcion'),
			'latitud' => $this->request->getPost('latitud'),
			'longitud' => $this->request->getPost('longitud'),
			'tipo_contaminacion' => $this->request->getPost('tipo_contaminacion'),
			'barrio' => $this->request->getPost('barrio'),
			'validado' => 0
		];
	
		
		if ($sitioModel->insert($dataSitio) == false) {
			$data = [
				'content' => 'sitio_form.php',
				'errors' => $sitioModel->validation->listErrors(),
			];
			echo view('index', $data);
		}else{
			$dataSitio['id'] = $sitioModel->insertID();
			if($imagefile = $this->request->getFiles())
			{
				foreach($imagefile['imagenes'] as $img)
				{
					if ($img->isValid() && ! $img->hasMoved())
					{
						$newName = $img->getRandomName();
						$imagenModel = new ImagenModel();
						$dataImagen = [
							'id_sitio_contaminado'=> $dataSitio['id'],
							'nombre_imagen'=>$newName
						];
					
						$imagenModel->insert($dataImagen);				
						$img->move('images/uploads', $newName);
					}
				}
			}
			return redirect('sitio/confirmacion');
		}
		


		//return redirect('sitio_form');
		/*
		$oficinaModel = new OficinaModel();
		$solicitudModel = new solicitudModel();
		$solicitud = [
			'fecha_evento' => $this->request->getPost('fecha_evento'),
			'tipo_solicitud' => $this->request->getPost('tipo_solicitud'),
			'asunto' => $this->request->getPost('asunto'),
			'descripcion' => $this->request->getPost('descripcion'),
			'id_oficina_destino' => $this->request->getPost('id_oficina_destino'),
			'firma' => $this->request->getPost('firma'),
			'id_usuario' => $_SESSION["user"]["id"],
			'radicado' => $this->radicado()
		];

		if ($solicitud['id_oficina_destino'] != 1) {
			$solicitudModel->validation->setError('oficina', 'El campo Oficina destino no es valido.');
			$data = [
				'content' => 'pqrs_form.php',
				'errors' => $solicitudModel->validation->listErrors(),
				'oficinas' => $oficinaModel->find()
			];
			return view('index', $data);
		}

		if ($solicitud['firma'] == '') {
			$solicitudModel->validation->setError('firma', 'El campo Firma no es valido.');
			$data = [
				'content' => 'pqrs_form.php',
				'errors' => $solicitudModel->validation->listErrors(),
				'oficinas' => $oficinaModel->find()
			];
			return view('index', $data);
		}

		if ($solicitudModel->insert($solicitud) == false) {
			$data = [
				'content' => 'pqrs_form.php',
				'errors' => $solicitudModel->validation->listErrors(),
				'oficinas' => $oficinaModel->find()
			];
			return view('index', $data);
		}
		else{
			$data = [
				'content' => 'pqrs_form.php',
				'oficinas' => $oficinaModel->find(),
				'mensajeExito' => '<p>Su solicitud ha sido recibida exitosamente.</p>'
			];
			return view('index', $data);
		}
		*/
	}

	private function radicado(){
		$radicado = hash('tiger192,3', date('y-m-d hh:mm:ss'));
		return substr($radicado,0,10);
	}

	public function add(){
		$oficinaModel = new OficinaModel();
		$data["oficinas"] = $oficinaModel->find();
		$data["content"] = 'pqrs_form.php';
		echo view('index',$data);
	}

	public function reportBarra(){
		$oficina = $_SESSION["user"]["id_oficina_empleado"];
		$id = $_SESSION["user"]["id"];
		$solicitudModel = new SolicitudModel();	
		$solitudes=$this->db->query("SELECT  concat(year(fecha_solicitud),'-',month(fecha_solicitud))  as fecha,count('') cantidad from solicitudes p group by month(fecha_solicitud)")->getResultArray();
	
		
		//$solitudes=$solicitudModel->where(array('id_oficina_destino'=> $oficina,"id_usuario != "=>$id) )->find();
		echo json_encode($solitudes);	
	}
	

	public function report($id){
		$sql="SELECT CONCAT(nombres,' ',apellidos) AS nombre,s.id,radicado,fecha_evento,fecha_solicitud,asunto,descripcion FROM solicitudes s
		INNER JOIN usuarios u ON (s.id_usuario=u.id) where s.id=?";
		$solicitudes=$this->db->query($sql, array($id))->getRowArray();

		$this->pdf->AddPage('P','A4',0);
		$x = $this->pdf->GetX() - 5;
        $y = $this->pdf->GetY() - 5;
        $this->pdf->Rect($x, $y,198, 15);
        $this->pdf->SetFont("Arial", "B", 15);
        $this->pdf->setY($y + 5);
        $this->pdf->Cell(198, 5, utf8_decode('Acta de PQRS'), 0, 1, 'C');
		$this->pdf->SetX($x);
		$this->pdf->ln(10);
		$this->pdf->SetFont("Arial", "B", 8);
		$this->pdf->Cell(198, 5, utf8_decode('RADICADO POR: '.$solicitudes["nombre"]), 0, 1, 'L');
		$this->pdf->Cell(198, 5, utf8_decode('NÚMERO DE RADICADO: '.$solicitudes["radicado"]), 0, 1, 'L');
		$this->pdf->Cell(198, 5, utf8_decode('FECHA EVENTO: '.$solicitudes["fecha_evento"]), 0, 1, 'L');
		$this->pdf->Cell(198, 5, utf8_decode('FECHA SOLICITUD: '.$solicitudes["fecha_solicitud"]), 0, 1, 'L');

		$this->pdf->ln(10);
		$this->pdf->Cell(198, 5, utf8_decode('ASUNTO'), 0, 1, 'C');
		$this->pdf->Cell(198, 5, utf8_decode($solicitudes["asunto"]), 0, 1, 'C');
		$this->pdf->ln(10);
		$this->pdf->Cell(198, 5, utf8_decode('DESCRIPCIÓN'), 0, 1, 'C');
		$this->pdf->Cell(198, 5, utf8_decode($solicitudes["asunto"]), 0, 1, 'C');
		$this->pdf->Output('paginaEnBlanco.pdf' , 'I' );
		ob_end_clean;
	}


	public function reportesNoValidados() {
		$sitioModel = new SitioModel();
		$reportList = $sitioModel->where(array('validado' => 0))->paginate(10);
		$paginador=$sitioModel->pager;
		$paginador->setPath('DSWFinal/public/sitio/noValidados');
		$data = [
			'content' => 'todos_reportes.php',
			'reportes' => $reportList,
			'paginador'=>$paginador
		];
		echo view('index',$data);
	}

	public function detallesSitio($id){
		$sitioModel = new SitioModel();
		$imagenModel = new ImagenModel();
		$reportList = $sitioModel->where(array('id' => $id))->first();
		$imagenesList = $imagenModel->where(array('id_sitio_contaminado' => $id))->find();
		$data = [
			'content' => 'reportes_detalles.php',
			'reportes' => $reportList,
			'imagenesList'=>$imagenesList
		];
		return  view('index',$data);
	}

	public function misReportes() {
		$sitioModel = new SitioModel();
		$reportList = $sitioModel->where(array('id_usuario' => $_SESSION['user']['id']))->paginate(10);
		$paginador=$sitioModel->pager;
		$paginador->setPath('DSWFinal/public/sitio/misReportes');		
		$data = [
			'content' => 'mis_reportes.php',
			'reportes' => $reportList,
			'paginador'=>$paginador
		];

		echo view('index',$data);
	}

	

	public function gestionarReporte($id,$validado){
		$sitioModel = new SitioModel();
		$dataSitio = [
			'id' => $id,			
			'validado' => $validado
		];
		$sitioModel->update($id,$dataSitio);
		if ($sitioModel->update($id,$dataSitio)== false) {
			$data = [
				'content' => 'sitio_form.php',
				'errors' => $sitioModel->validation->listErrors(),
			];
			return redirect("sitio/reporte/$id");
		}else{
			return redirect("sitio/noValidados");
		}
	}
}
