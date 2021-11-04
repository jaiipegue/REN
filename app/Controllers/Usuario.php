<?php namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\OficinaModel;

class Usuario extends BaseController
{
	public function index()
	{
		return view('presentacion');
	}	

	public function crear()
	{
		$usuarioModel = new UsuarioModel();

		if ($this->request->getMethod() == 'get') {
			return view('registro');
		}
		elseif ($this->request->getMethod() == 'post')
		{
			$usuario = [
				'nombres' => $this->request->getVar('nombres'),
				'apellidos' => $this->request->getVar('apellidos'),
				'edad' => $this->request->getVar('edad'),
				'tipo_usuario' => 'Ciudadano',
				'email' => $this->request->getVar('email'),
				'telefono' => $this->request->getVar('telefono'),
				'clave' => hash("sha256",$this->request->getVar('clave')) 
			];		
				
	
			if ($usuarioModel->insert($usuario) == false) {
				return view('index', [
					'content' => 'registro.php',					
					'errors' => $usuarioModel->validation->listErrors()
				]);
			}
			else
			{
				return redirect("login");
			}
		}
	}

	public function login()
	{
		$validation = \Config\Services::validation();
		$validation->reset();
		$validation->setRules([
			'correo' => 'required|valid_email',
			'password' => 'required'
		],
		[
			'correo' => [
				'required' => 'El campo Correo es requerido.',
				'valid_email' => 'El campo Correo debe ser un una dirección de correo valida.'
			],
			'password' => [
				'required' => 'El campo Contraseña es requerido.'
			]
		]);
		$usuarioModel = new UsuarioModel();


		if (!$validation->withRequest($this->request)->run()) {
			$data = [
				'content' => 'login.php',
				'errors' => $validation->listErrors()
			];

			return view('presentacion', $data);
		}
		
		$correo = $this->request->getPost('correo');
		$pass = $this->request->getPost('password');

		$u = $usuarioModel->where(array('email'=> $correo,'clave'=> hash("sha256",$pass)) )->first();
	
		if (!empty($u))
		{
			$session['user'] = [
				'id' => $u['id'],
				'edad' => $u['edad'],
				'nombres' => $u['nombres'],
				'apellidos' => $u['apellidos'],
				'email' => $u['email'],
				'telefono' => $u['telefono'],
				'tipo_usuario' => $u['tipo_usuario'],
				
			];
			$this->buildMenu($u['tipo_usuario']);
			$_SESSION['user'] = $u;
			return redirect('panel');
			
			
		}
		else
		{
			$data = [
				'content' => 'login.php',
				'errors' => 'Usuario o contraseña incorrectos.'
			];
			return view('presentacion', $data);
		}
		
	}

	public function buildMenu($tipo){
		$html="";
		if($tipo=='cliente'){
			$html="	<a href=' ".base_url()."cpqrs' class='list-group-item list-group-item-action bg-light'>Gestion de PQRS</a>";
		}else{
			$html="<a href=' ".base_url()."pqrs' class='list-group-item list-group-item-action bg-light'>Gestion de PQRS</a>
			<a href=' ".base_url()."cpqrs' class='list-group-item list-group-item-action bg-light'>Mis PQRS</a>";
		}
		$html .= "\n<a href=' ".base_url()."logout' class='list-group-item list-group-item-action bg-light'>Salir</a>";

		$_SESSION["sidebar"]=$html;
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect('login');
	}
}