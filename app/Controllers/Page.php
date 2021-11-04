<?php namespace App\Controllers;

use App\Models\RespuestaModel;

class Page extends BaseController
{
	public function index()
	{		
		$data["content"]='init.php';
		return view('presentacion',$data);
    }

  public function quienes()
	{		
		$data["content"]='quienes.php';
		return view('presentacion',$data);
    }

  public function register()
	{ 
    $data["content"]='registro.php';
		return view('presentacion',$data);
	}
	public function login(){
		$data["content"]='login.php';
		return view('presentacion',$data);
	}
}