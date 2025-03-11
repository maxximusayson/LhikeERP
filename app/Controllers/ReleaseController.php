<?php

namespace App\Controllers;

use App\Models\ReleaseModel;
use CodeIgniter\Controller;

class ReleaseController extends Controller
{
    public function index()
    {
        $model = new ReleaseModel();
        $data['releaseNotes'] = $model->orderBy('note_release_date', 'DESC')->findAll();

        return view('release', $data);
    }
}