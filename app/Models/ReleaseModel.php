<?php

namespace App\Models;

use CodeIgniter\Model;

class ReleaseModel extends Model
{
    protected $table = 'releaseNotes';
    protected $primaryKey = 'releasenote_id';
    protected $allowedFields = ['releasenote_name', 'description', 'note_release_date', 'link'];
}