<?php
namespace App\Models;

use CodeIgniter\Model;

class SelectedModuleModel extends Model
{
    protected $table = 'selectedmodules';
    protected $primaryKey = 'selected_id';
    protected $allowedFields = ['module_id', 'version_name', 'description', 'release_date', 'link'];
}