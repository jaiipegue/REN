<?php namespace App\Models;


class ImagenModel extends BaseModel
{
    protected $table = 'imagenes';

    protected $allowedFields = ['id_sitio_contaminado', 'nombre_imagen'];

    protected $validationRules = [
        'id_sitio_contaminado' => 'required',
        'nombre_imagen' => 'required',
    ];

    protected $validationMessages = [
        'id_sitio_contaminado' => [
            'required' => 'El campo Descripción es requerido.'
        ],
        'nombre_imagen' => [
            'required' => 'El campo Tipo de contaminación es requerido.'
        ]
    ];
}
