<?php namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation = false;
}
