<?php
namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table = 'modules';
    protected $primaryKey = 'module_id';
    protected $allowedFields = ['modulename', 'description', 'created_at', 'updated_at'];
}