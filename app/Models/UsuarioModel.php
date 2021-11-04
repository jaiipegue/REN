<?php namespace App\Models;


class UsuarioModel extends BaseModel
{
    protected $table = 'usuarios';

    protected $allowedFields = ['nombres', 'apellidos', 'edad', 'tipo_usuario', 'email', 'telefono', 'clave'];

    protected $validationRules = [
        'nombres' => 'required|alpha_space',
        'apellidos' => 'required|alpha_space',
        'edad' => 'required|greater_than_equal_to[18]',
        'tipo_usuario' => 'required|in_list[Admin,Ciudadano]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
        'telefono' => 'required|numeric|exact_length[10]',
        'clave' => 'required|alpha_numeric|min_length[6]',
    ];

    protected $validationMessages = [
        'nombres' => [
            'required' => 'El campo Nombres es requerido.',
            'alpha_space' => 'El campo Nombres solo acepta letras y espacios.'
        ],
        'apellidos' => [
            'required' => 'El campo Apellidos es requerido.',
            'alpha_space' => 'El campo Apellidos solo acepta letras y espacios.'
        ],
        'edad' => [
            'required' => 'El campo Edad es requerido.',
            'greater_than_equal_to' => 'El campo Edad debe ser un numero mayor a 18.'
        ],
        'tipo_usuario' => [
            'required' => 'El campo Tipo cliente es requerido.',
            'in_list' => 'El campo Tipo usuario debe ser Ciudadano o Admin.'
        ],
        'email' => [
            'required' => 'El campo Email es requerido.',
            'valid_email' => 'Debe ingresar un email valido.',
            'is_unique' => 'Este email no es valido.'
        ],
        'telefono' => [
            'required' => 'El campo Telefono es requerido.',
            'numeric' => 'El campo Telefono solo debe contener numeros.',
            'exact_length' => 'El campo Telefono debe tener exactamente 10 numeros.'
        ],
        'clave' => [
            'required' => 'El campo Clave es requerido.',
            'alpha_numeric' => 'El campo Clave solo debe contener letras y numeros.',
            'min_length' => 'El campo Clave debe de ser de minimo 6 caracteres.'
        ]
    ];
}
