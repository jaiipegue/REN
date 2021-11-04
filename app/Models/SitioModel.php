<?php namespace App\Models;


class SitioModel extends BaseModel
{
    protected $table = 'sitios_contaminados';

    protected $allowedFields = ['id_usuario', 'descripcion', 'tipo_contaminacion', 'latitud', 'longitud', 'validado', 'fecha','barrio'];

    protected $validationRules = [
        'descripcion' => 'required|alpha_space',
        'tipo_contaminacion' => 'required|in_list[Suelo,Hidrica]',
        /*'latitud' => 'required',
        'longitud' => 'required',*/
        'barrio' => 'required',
    ];

    protected $validationMessages = [
        'descripcion' => [
            'required' => 'El campo Descripción es requerido.',
            'alpha_space' => 'El campo Descripción solo acepta letras y espacios.'
        ],
        'tipo_contaminacion' => [
            'required' => 'El campo Tipo de contaminación es requerido.',
            'in_list' => 'El campo Tipo de Contaminación debe ser Suelo o Hidrica.'
        ],
        /*'latitud' => [
            'required' => 'El campo Latitud es requerido.',
        ],
        'longitud' => [
            'required' => 'El campo Longitud es requerido.'
        ],*/
        'barrio' => [
            'required' => 'El campo Barrio es requerido.',
         
        ]
    ];
}
